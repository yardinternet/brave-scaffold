<?php

declare(strict_types=1);

namespace App\View\Components\Card;

use App\View\Components\Card;

class YardEvent extends Card
{
	protected function hydrate(): void
	{
		$this->displayExcerpt ??= false;
		$this->eventDateTime ??= $this->postData->formattedDateTime();
		$this->eventLocation ??= $this->postData->formattedAddress();
		$this->label ??= $this->postData->categories?->first()?->name;
	}
}
