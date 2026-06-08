<?php

declare(strict_types=1);

namespace App\FieldGroups;

use Extended\ACF\Fields\Email;
use Extended\ACF\Fields\Text;
use Extended\ACF\Location;
use Yard\Acf\Registrar\FieldGroup;

class Person extends FieldGroup
{
	final public const FIELD_FUNCTION = 'person_function';
	final public const FIELD_EMAIL = 'person_email';
	final public const FIELD_PHONE = 'person_phone';

	public function getTitle(): string
	{
		return 'Persooninstellingen';
	}

	public function getFields(): array
	{
		return [
			static::FIELD_FUNCTION => Text::make('Functie', self::FIELD_FUNCTION),
			static::FIELD_EMAIL => Email::make('E-mailadres', self::FIELD_EMAIL),
			static::FIELD_PHONE => Text::make('Telefoonnummer', self::FIELD_PHONE),
		];
	}

	public function getLocation(): array
	{
		return [
			Location::where('post_type', '==', 'person'),
		];
	}
}
