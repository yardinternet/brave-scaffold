<?php

declare(strict_types=1);

namespace Yard\Brave\Scaffold\Console;

use Illuminate\Console\Command;

class KnowledgebaseScaffoldCommand extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'scaffold:knowledgebase';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Scaffold knowledgebase';

	/**
	 * Execute the console command.
	 */
	public function handle(): void
	{
		$this->call('vendor:publish', [
			'--provider' => 'Yard\\Brave\\Scaffold\\ScaffoldServiceProvider',
			'--tag' => 'knowledgebase',
		]);
	}
}
