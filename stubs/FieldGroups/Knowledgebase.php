<?php

declare(strict_types=1);

namespace App\FieldGroups;

use Extended\ACF\Fields\Relationship;
use Extended\ACF\Location;
use Yard\Acf\Registrar\FieldGroup;

class Knowledgebase extends FieldGroup
{
	public function getTitle(): string
	{
		return 'Kennisbank instellingen';
	}

	public function getFields(): array
	{
		return [
			Relationship::make('Gerelateerde artikelen', 'knowledgebase_related')
				->postTypes(['knowledgebase'])
				->postStatus(['publish'])
				->instructions('Standaard worden er 3 artikelen van hetzelfde type getoond. Als je zelf wilt bepalen welke artikelen getoond moeten worden, dan kun je dat hier selecteren.')
				->filters(['search', 'taxonomy'])
				->max(3),
		];
	}

	public function getLocation(): array
	{
		return [
			Location::where('post_type', '==', 'knowledgebase'),
		];
	}
}
