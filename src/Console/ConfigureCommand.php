<?php

declare(strict_types=1);

namespace Yard\Brave\Scaffold\Console;

use Dotenv\Dotenv;
use Illuminate\Console\Command;
use Roots\Acorn\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Process\Process;

class ConfigureCommand extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'configure';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Configure project';

	public function handle(): int
	{
		// Determine project based on repository URL
		$process = Process::fromShellCommandline('git remote get-url origin');
		$process->run();
		$repoUrl = trim($process->getOutput());
		$project = basename($repoUrl, '.git');

		// Find the root directory of the project
		$rootComposerJson = (new Filesystem())->closest(app_path(), 'composer.json');
		if (null === $rootComposerJson) {
			$this->error('Could not find composer.json in the project root.');

			return self::FAILURE;
		}

		$root = dirname($rootComposerJson);

		// Ask for the customer name
		$customer = $this->ask('What is the customer name (used in the deploy path)?', $project);

		// Replacements for placeholders in .example files
		$replacements = [
			'project' => $project,
			'customer' => $customer,
		];

		// Find .example files
		$finder = Finder::create()->files()->depth(0)->in($root)->ignoreDotFiles(false)->name("/\.example$/");
		foreach ($finder as $file) {
			$newFileName = $file->getBasename('.example');
			$newFilePath = $file->getPath() . '/' . $newFileName;

			if (! $this->confirm("Do you want to create {$newFileName} based on {$file->getFilename()}?", true)) {
				continue;
			};

			if (file_exists($newFilePath) && ! is_writable($newFilePath)) {
				$this->error("File {$newFilePath} is not writable. Skipping.");

				continue;
			}

			// Do the replacements
			if (str_starts_with($newFileName, '.env')) {
				$dotEnv = Dotenv::parse($file->getContents());

				//TODO: move to seperate function
				foreach ($dotEnv as $key => $value) {
					switch ($key) {
						case 'DB_HOST':
							$value = 'database';

							break;
						case 'DB_NAME':
						case 'DB_USER':
						case 'DB_PASSWORD':
							$value = 'wordpress';

							break;
						case 'WP_ENV':
							$value = 'development';
							// no break
						case 'WP_HOME':
							$value = "https://{$project}.lndo.site";

							break;
						case 'DOMAIN_CURRENT_SITE':
							$value = "{$project}.lndo.site";

							break;
						case 'WP_SITEURL':
							// Keep the default interpolated value
							continue 2;
						case 'AUTH_KEY':
						case 'SECURE_AUTH_KEY':
						case 'LOGGED_IN_KEY':
						case 'NONCE_KEY':
						case 'AUTH_SALT':
						case 'SECURE_AUTH_SALT':
						case 'LOGGED_IN_SALT':
						case 'NONCE_SALT':
							$value = base64_encode(random_bytes(64));

							break;
						default:
							$value = $this->ask("Please provide a value for {$key}", $value);

							break;
					}

					$dotEnv[$key] = "'" . $value . "'";
				}

				$parsedContent = preg_replace_callback(
					'/^(?P<key>[a-zA-Z_]+[a-zA-Z0-9_])*=(?P<value>.+)$/m',
					fn (array $matches): string => isset($dotEnv[$matches['key']]) ? $matches['key'] . '=' . $dotEnv[$matches['key']] : $matches[0],
					$file->getContents()
				);
			} else {
				$parsedContent = preg_replace_callback(
					'/\{\{\s*([\w\.\/-]+)\s*\}\}/',
					fn (array $matches): string => $replacements[$matches[1]] ?? $matches[0],
					$file->getContents()
				);
			}

			if (null === $parsedContent) {
				$this->error("Failed to parse content of {$file->getFilename()}.");

				continue;
			}

			// Write the new file
			$filesystem = new Filesystem();
			$filesystem->put($newFilePath, $parsedContent);
		}

		// Update composer.json
		$process = Process::fromShellCommandline('composer config name yard/' . $project, $root);
		$process->run();

		return self::SUCCESS;
	}
}
