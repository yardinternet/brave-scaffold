<?php

declare(strict_types=1);

namespace App\FieldGroups;

use Extended\ACF\Fields\Email;
use Extended\ACF\Fields\Text;
use Extended\ACF\Location;
use Yard\Acf\Registrar\FieldGroup;

class Person extends FieldGroup
{
	public function getTitle(): string
	{
		return 'Persoon instellingen';
	}

	public function getFields(): array
	{
		return [
			Text::make('Functie', 'person_function'),
			Email::make('E-mailadres', 'person_email'),
			Text::make('Telefoonnummer', 'person_phone'),
		];
	}

	public function getLocation(): array
	{
		return [
			Location::where('post_type', '==', 'person'),
		];
	}
}
