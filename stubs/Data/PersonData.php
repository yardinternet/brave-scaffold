<?php

declare(strict_types=1);

namespace App\Data;

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
	#[Meta]
	public string $function = '';
	#[Meta]
	public string $email = '';
	#[Meta]
	public string $phone = '';

	#[Terms]
	/** @var Collection<int, TermData> */
	public Collection $types;
}
