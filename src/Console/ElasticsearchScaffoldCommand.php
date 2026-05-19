<?php

declare(strict_types=1);

namespace Yard\Brave\Scaffold\Console;

use Illuminate\Console\Command;

class ElasticsearchScaffoldCommand extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'scaffold:elasticsearch';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Scaffold Elasticsearch & Reactive Search';

	/**
	 * Execute the console command.
	 */
	public function handle(): void
	{
		$this->call('vendor:publish', [
			'--provider' => 'Yard\\Brave\\Scaffold\\ScaffoldServiceProvider',
			'--tag' => 'elasticsearch',
		]);
		$variablesPath = base_path('resources/styles/base/variables.css');
		if (! file_exists($variablesPath) || ! str_contains(file_get_contents($variablesPath), '--pagination-')) {
			$this->warn('variables.css mist de shared elasticsearch/facetwp --pagination-* variabelen. Kopieer ze over vanuit brave.');
		}

		$this->info('You need to do some additional steps after running this scaffold. Please read the docs here:');
		$this->line('https://github.com/yardinternet/brave-scaffold/blob/main/docs/elasticsearch.md');
	}
}
