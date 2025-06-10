<?php

declare(strict_types=1);

namespace App\View\Components\Card;

use App\View\Components\Card;

class Project extends Card
{
	protected function hydrate(): void
	{
		$this->subtitle ??= $this->postData->cardSubtitle();
		$this->label ??= $this->postData->types?->implode('name', ', ');
	}
}
