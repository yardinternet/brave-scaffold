<?php

declare(strict_types=1);

namespace Yard\Brave\Scaffold;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Yard\Brave\Scaffold\Console\ChildThemeScaffoldCommand;
use Yard\Brave\Scaffold\Console\EventScaffoldCommand;
use Yard\Brave\Scaffold\Console\KnowledgebaseScaffoldCommand;
use Yard\Brave\Scaffold\Console\NewsScaffoldCommand;
use Yard\Brave\Scaffold\Console\PersonScaffoldCommand;
use Yard\Brave\Scaffold\Console\ProjectScaffoldCommand;

class ScaffoldServiceProvider extends PackageServiceProvider
{
	public function configurePackage(Package $package): void
	{
		$package
			->name('brave-scaffold')
			->hasCommands(
				[
					ChildThemeScaffoldCommand::class,
					KnowledgebaseScaffoldCommand::class,
					NewsScaffoldCommand::class,
					PersonScaffoldCommand::class,
					ProjectScaffoldCommand::class,
					EventScaffoldCommand::class,
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

		$this->publishes([
			__DIR__ . '/../stubs/acf-json/group_66e0254a243fe.json' => base_path('acf-json/group_66e0254a243fe.json'),
			__DIR__ . '/../stubs/Data/ProjectData.php' => app_path('Data/ProjectData.php'),
			__DIR__ . '/../stubs/View/Components/Card/Project.php' => app_path('View/Components/Card/Project.php'),
			__DIR__ . '/../stubs/config/facetwp/facets/project_region.php' => config_path('facetwp/facets/project_region.php'),
			__DIR__ . '/../stubs/config/facetwp/facets/project_result_count.php' => config_path('facetwp/facets/project_result_count.php'),
			__DIR__ . '/../stubs/config/facetwp/facets/project_status.php' => config_path('facetwp/facets/project_status.php'),
			__DIR__ . '/../stubs/config/facetwp/facets/project_type.php' => config_path('facetwp/facets/project_type.php'),
			__DIR__ . '/../stubs/config/facetwp/templates/project.php' => config_path('facetwp/templates/project.php'),
			__DIR__ . '/../stubs/config/poet/post/project.php' => config_path('poet/post/project.php'),
			__DIR__ . '/../stubs/config/poet/taxonomy/project_region.php' => config_path('poet/taxonomy/project_region.php'),
			__DIR__ . '/../stubs/config/poet/taxonomy/project_status.php' => config_path('poet/taxonomy/project_status.php'),
			__DIR__ . '/../stubs/config/poet/taxonomy/project_type.php' => config_path('poet/taxonomy/project_type.php'),
			__DIR__ . '/../stubs/resources/views/blocks/FacetWP/loops/project-loop.blade.php' => resource_path('views/blocks/FacetWP/loops/project-loop.blade.php'),
			__DIR__ . '/../stubs/resources/views/blocks/FacetWP/templates/project.blade.php' => resource_path('views/blocks/FacetWP/templates/project.blade.php'),
			__DIR__ . '/../stubs/resources/views/partials/content-single-project.blade.php' => resource_path('views/partials/content-single-project.blade.php'),
		], 'project');

		$this->publishes([
			__DIR__ . '/../stubs/Data/EventData.php' => app_path('Data/EventData.php'),
			__DIR__ . '/../stubs/View/Components/Card/YardEvent.php' => app_path('View/Components/Card/YardEvent.php'),
			__DIR__ . '/../stubs/config/facetwp/facets/event_category.php' => config_path('facetwp/facets/event_category.php'),
			__DIR__ . '/../stubs/config/facetwp/facets/event_date_range.php' => config_path('facetwp/facets/event_date_range.php'),
			__DIR__ . '/../stubs/config/facetwp/facets/event_distance.php' => config_path('facetwp/facets/event_distance.php'),
			__DIR__ . '/../stubs/config/facetwp/facets/event_result_count.php' => config_path('facetwp/facets/event_result_count.php'),
			__DIR__ . '/../stubs/config/facetwp/templates/events.php' => config_path('facetwp/templates/events.php'),
			__DIR__ . '/../stubs/resources/styles/blocks/add-event-to-calendar/shared.css' => resource_path('styles/blocks/add-event-to-calendar/shared.css'),
			__DIR__ . '/../stubs/resources/views/blocks/FacetWP/loops/events-loop.blade.php' => resource_path('views/blocks/FacetWP/loops/events-loop.blade.php'),
			__DIR__ . '/../stubs/resources/views/blocks/FacetWP/templates/events.blade.php' => resource_path('views/blocks/FacetWP/templates/events.blade.php'),
			__DIR__ . '/../stubs/resources/views/components/meta/event.blade.php' => resource_path('views/components/meta/event.blade.php'),
			__DIR__ . '/../stubs/resources/views/vendor/wp-events/blocks/event-info.blade.php' => resource_path('views/vendor/wp-events/blocks/event-info.blade.php'),
			__DIR__ . '/../stubs/resources/views/partials/content-single-yard-event-schedule.blade.php' => resource_path('views/partials/content-single-yard-event-schedule.blade.php'),
			__DIR__ . '/../stubs/resources/views/partials/content-single-yard-event.blade.php' => resource_path('views/partials/content-single-yard-event.blade.php'),
		], 'wp-events');
	}
}
