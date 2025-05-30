<?php

declare(strict_types=1);

namespace App\View\Components\Card;

use App\View\Components\Card;

class News extends Card
{
	protected function hydrate(): void
	{
		$this->displayDate ??= true;
		$this->label ??= $this->postData->types?->implode('name', ', ');
	}
}
