<?php

declare(strict_types=1);

namespace Yard\Brave\Scaffold\Console;

use Illuminate\Console\Command;

class EventScaffoldCommand extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'scaffold:wp-events';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Scaffold wp-events content type';

	/**
	 * Execute the console command.
	 */
	public function handle(): void
	{
		$this->call('vendor:publish', [
			'--provider' => 'Yard\\Brave\\Scaffold\\ScaffoldServiceProvider',
			'--tag' => 'wp-events',
		]);
		$this->info('You need to do some additional steps after running this scaffold. Please read the docs here:');
		$this->line('https://github.com/yardinternet/brave-scaffold/blob/main/docs/wp-events.md');
	}
}
