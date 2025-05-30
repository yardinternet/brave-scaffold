<?php

declare(strict_types=1);

namespace Yard\Brave\Scaffold;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Yard\Brave\Scaffold\Console\ScaffoldCommand;

class ScaffoldServiceProvider extends PackageServiceProvider
{
	public function configurePackage(Package $package): void
	{
		$package
			->name('brave-scaffold')
			->hasConfigFile()
			->hasViews()
			->hasCommand(ScaffoldCommand::class);
	}

	public function packageRegistered(): void
	{
		$this->app->singleton(Scaffold::class, fn () => new Scaffold($this->app));
	}

	public function packageBooted(): void
	{
		$this->app->make(Scaffold::class);
	}
}
