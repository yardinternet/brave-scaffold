<?php

declare(strict_types=1);

namespace Yard\Brave\Scaffold\Console;

use Illuminate\Console\Command;
use Yard\Brave\Scaffold\Scaffold;

class ScaffoldCommand extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'scaffold';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'My custom Acorn command.';

	/**
	 * Execute the console command.
	 */
	public function handle(): void
	{
		$this->info(
			app(Scaffold::class)->getQuote()
		);
	}
}
