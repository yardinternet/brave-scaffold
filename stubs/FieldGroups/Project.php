<?php

declare(strict_types=1);

namespace App\FieldGroups;

use Extended\ACF\Fields\Relationship;
use Extended\ACF\Fields\TrueFalse;
use Extended\ACF\Location;
use Yard\Acf\Registrar\FieldGroup;

class Project extends FieldGroup
{
	final public const FIELD_RELATED = 'project_related';
	final public const FIELD_HIDE = 'project_hide';
	final public const FIELD_IS_INFORMATION_POST = 'project_is_information_post';

	public function getTitle(): string
	{
		return 'Projectinstellingen';
	}

	public function getFields(): array
	{
		return [
			static::FIELD_RELATED => Relationship::make('Gerelateerde projecten', self::FIELD_RELATED)
				->postTypes(['project'])
				->postStatus(['publish'])
				->helperText('Standaard worden er 3 projecten van hetzelfde type getoond. Als je zelf wilt bepalen welke projecten getoond moeten worden, dan kun je dat hier selecteren.')
				->filters(['search', 'taxonomy'])
				->maxPosts(3),
			static::FIELD_HIDE => TrueFalse::make('Niet tonen in overzicht', self::FIELD_HIDE)
				->stylized(),
			static::FIELD_IS_INFORMATION_POST => TrueFalse::make('Is een informatiepagina', self::FIELD_IS_INFORMATION_POST)
				->helperText('Vink dit aan als de post een informatiepagina is, en geen deelproject. Bijvoorbeeld: "Meedenken over de herinrichting Dorpsstraat" is een informatiepagina van het hoofdproject "Herinrichting Dorpsstraat".<br><br>Let op:<br>Vergeet niet ook een hoofdpagina te selecteren én de optie "Niet tonen in overzicht" aan te vinken.')
				->stylized(),
		];
	}

	public function getLocation(): array
	{
		return [
			Location::where('post_type', '==', 'project'),
		];
	}
}
