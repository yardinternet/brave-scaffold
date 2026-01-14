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
		$this->info('You need to do some additional steps after running this scaffold. Please read the docs here:');
		$this->line('https://github.com/yardinternet/brave-scaffold/blob/main/docs/elasticsearch.md');
	}
}
