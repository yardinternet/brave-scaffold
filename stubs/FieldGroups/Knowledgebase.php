<?php

declare(strict_types=1);

namespace App\FieldGroups;

use Extended\ACF\Fields\Relationship;
use Extended\ACF\Location;
use Yard\Acf\Registrar\FieldGroup;

class Knowledgebase extends FieldGroup
{
	final public const FIELD_RELATED = 'knowledgebase_related';

	public function getTitle(): string
	{
		return 'Kennisbankinstellingen';
	}

	public function getFields(): array
	{
		return [
			static::FIELD_RELATED => Relationship::make('Gerelateerde artikelen', self::FIELD_RELATED)
				->postTypes(['knowledgebase'])
				->postStatus(['publish'])
				->helperText('Standaard worden er 3 artikelen van hetzelfde type getoond. Als je zelf wilt bepalen welke artikelen getoond moeten worden, dan kun je dat hier selecteren.')
				->filters(['search', 'taxonomy'])
				->maxPosts(3),
		];
	}

	public function getLocation(): array
	{
		return [
			Location::where('post_type', '==', 'knowledgebase'),
		];
	}
}
