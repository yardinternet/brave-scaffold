<?php

declare(strict_types=1);

namespace Yard\Brave\Scaffold;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Yard\Brave\Scaffold\Console\KnowledgebaseScaffoldCommand;
use Yard\Brave\Scaffold\Console\NewsScaffoldCommand;
use Yard\Brave\Scaffold\Console\PersonScaffoldCommand;

class ScaffoldServiceProvider extends PackageServiceProvider
{
	public function configurePackage(Package $package): void
	{
		$package
			->name('brave-scaffold')
			->hasCommands([
					NewsScaffoldCommand::class,
					PersonScaffoldCommand::class,
					KnowledgebaseScaffoldCommand::class
				]
			);
	}

	public function bootingPackage(): void
	{
		$this->publishes([
			__DIR__ . '/../stubs/View/Components/Card/News.php' => app_path('View/Components/Card/News.php'),
			__DIR__ . '/../stubs/Data/NewsData.php' => app_path('Data/NewsData.php'),
			__DIR__ . '/../stubs/config/poet/post/news.php' => config_path('poet/post/news.php'),
			__DIR__ . '/../stubs/config/poet/taxonomy/news_type.php' => config_path('poet/taxonomy/news_type.php'),
			__DIR__ . '/../stubs/config/facetwp/facets/news_type.php' => config_path('facetwp/facets/news_type.php'),
			__DIR__ . '/../stubs/config/facetwp/facets/news_result_count.php' => config_path('facetwp/facets/news_result_count.php'),
			__DIR__ . '/../stubs/config/facetwp/templates/news.php' => config_path('facetwp/templates/news.php'),
			__DIR__ . '/../stubs/resources/views/blocks/FacetWP/loops/news-loop.blade.php' => resource_path('views/blocks/FacetWP/loops/news-loop.blade.php'),
			__DIR__ . '/../stubs/resources/views/blocks/FacetWP/templates/news.blade.php' => resource_path('views/blocks/FacetWP/templates/news.blade.php'),
			__DIR__ . '/../stubs/resources/views/partials/content-single-news.blade.php' => resource_path('views/partials/content-single-news.blade.php'),
		], 'news');

		$this->publishes([
			__DIR__ . '/../stubs/View/Components/Card/Knowledgebase.php' => app_path('View/Components/Card/Knowledgebase.php'),
			__DIR__ . '/../stubs/Data/KnowledgebaseData.php' => app_path('Data/KnowledgebaseData.php'),
			__DIR__ . '/../stubs/config/poet/post/knowledgebase.php' => config_path('poet/post/knowledgebase.php'),
			__DIR__ . '/../stubs/config/poet/taxonomy/knowledgebase_type.php' => config_path('poet/taxonomy/knowledgebase_type.php'),
			__DIR__ . '/../stubs/config/facetwp/facets/knowledgebase_type.php' => config_path('facetwp/facets/knowledgebase_type.php'),
			__DIR__ . '/../stubs/config/facetwp/facets/knowledgebase_result_count.php' => config_path('facetwp/facets/knowledgebase_result_count.php'),
			__DIR__ . '/../stubs/config/facetwp/templates/knowledgebase.php' => config_path('facetwp/templates/knowledgebase.php'),
			__DIR__ . '/../stubs/resources/views/blocks/FacetWP/loops/knowledgebase-loop.blade.php' => resource_path('views/blocks/FacetWP/loops/knowledgebase-loop.blade.php'),
			__DIR__ . '/../stubs/resources/views/blocks/FacetWP/templates/knowledgebase.blade.php' => resource_path('views/blocks/FacetWP/templates/knowledgebase.blade.php'),
			__DIR__ . '/../stubs/resources/views/partials/content-single-knowledgebase.blade.php' => resource_path('views/partials/content-single-knowledgebase.blade.php'),
			__DIR__ . '/../stubs/acf-json/group_66e0254a243fd.json' => base_path('acf-json/group_66e0254a243fd.json'),
		], 'knowledgebase');

		$this->publishes([
			__DIR__ . '/../stubs/View/Components/Card/Person.php' => app_path('View/Components/Card/Person.php'),
			__DIR__ . '/../stubs/Data/PersonData.php' => app_path('Data/PersonData.php'),
			__DIR__ . '/../stubs/config/poet/post/person.php' => config_path('poet/post/person.php'),
			__DIR__ . '/../stubs/config/poet/taxonomy/person_type.php' => config_path('poet/taxonomy/person_type.php'),
			__DIR__ . '/../stubs/config/facetwp/facets/person_result_count.php' => config_path('facetwp/facets/person_result_count.php'),
			__DIR__ . '/../stubs/config/facetwp/templates/person.php' => config_path('facetwp/templates/person.php'),
			__DIR__ . '/../stubs/resources/views/blocks/FacetWP/loops/person-loop.blade.php' => resource_path('views/blocks/FacetWP/loops/person-loop.blade.php'),
			__DIR__ . '/../stubs/resources/views/blocks/FacetWP/templates/person.blade.php' => resource_path('views/blocks/FacetWP/templates/person.blade.php'),
			__DIR__ . '/../stubs/resources/views/partials/content-single-person.blade.php' => resource_path('views/partials/content-single-person.blade.php'),
			__DIR__ . '/../stubs/acf-json/group_66e02ff47667d.json' => base_path('acf-json/group_66e02ff47667d.json'),
		], 'person');
	}
}
