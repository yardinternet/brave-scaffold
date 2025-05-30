<?php

declare(strict_types=1);

namespace App\View\Components\Card;

use App\View\Components\Card;

class Person extends Card
{
	protected function hydrate(): void
	{
		$this->displayExcerpt ??= false;
		$this->email ??= $this->postData->email;
		$this->phone ??= $this->postData->phone;
		$this->subtitle ??= $this->postData->function;
	}
}
