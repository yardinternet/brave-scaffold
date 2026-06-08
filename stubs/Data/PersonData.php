<?php

declare(strict_types=1);

namespace App\Data;

use App\FieldGroups\Person as PersonFieldGroup;
use Illuminate\Support\Collection;
use Yard\Data\Attributes\Meta;
use Yard\Data\Attributes\MetaPrefix;
use Yard\Data\Attributes\TaxonomyPrefix;
use Yard\Data\Attributes\Terms;
use Yard\Data\PostData;
use Yard\Data\TermData;

#[MetaPrefix(prefix: 'person')]
#[TaxonomyPrefix(prefix: 'person')]
class PersonData extends PostData
{
	#[Meta(PersonFieldGroup::FIELD_FUNCTION)]
	public string $function = '';
	#[Meta(PersonFieldGroup::FIELD_EMAIL)]
	public string $email = '';
	#[Meta(PersonFieldGroup::FIELD_PHONE)]
	public string $phone = '';

	#[Terms]
	/** @var Collection<int, TermData> */
	public Collection $types;
}
