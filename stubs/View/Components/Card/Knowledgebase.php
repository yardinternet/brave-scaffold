<?php

declare(strict_types=1);

namespace App\View\Components\Card;

use App\View\Components\Card;

class Knowledgebase extends Card
{
	protected function hydrate(): void
	{
		$this->label ??= $this->postData->types?->implode('name', ', ');
	}
}
