<?php

declare(strict_types=1);

namespace App\FieldGroups;

use Extended\ACF\Fields\Relationship;
use Extended\ACF\Fields\TrueFalse;
use Extended\ACF\Location;
use Yard\Acf\Registrar\FieldGroup;

class Project extends FieldGroup
{
	public function getTitle(): string
	{
		return 'Projectinstellingen';
	}

	public function getFields(): array
	{
		return [
			Relationship::make('Gerelateerde projecten', 'project_related')
				->postTypes(['project'])
				->instructions('Standaard worden er 3 projecten van hetzelfde type getoond. Als je zelf wilt bepalen welke projecten getoond moeten worden, dan kun je dat hier selecteren.')
				->filters(['search', 'taxonomy'])
				->max(3),
			TrueFalse::make('Niet tonen in overzicht', 'project_hide')
				->stylisedUi(),
			TrueFalse::make('Is een informatiepagina', 'project_is_information_post')
				->instructions('Vink dit aan als de post een informatiepagina is, en geen deelproject. Bijvoorbeeld: "Meedenken over de herinrichting Dorpsstraat" is een informatiepagina van het hoofdproject "Herinrichting Dorpsstraat".<br><br>Let op:<br>Vergeet niet ook een hoofdpagina te selecteren én de optie "Niet tonen in overzicht" aan te vinken.')
				->stylisedUi(),
		];
	}

	public function getLocation(): array
	{
		return [
			Location::where('post_type', '==', 'project'),
		];
	}
}
