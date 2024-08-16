<?php

declare(strict_types=1);

namespace App\UI\Front\Presenters;

use App\UI\Accessory\RequireLoggedUser;
use Nette;



final class HomePresenter extends Nette\Application\UI\Presenter
{
	// Incorporates methods to check user login status
	use RequireLoggedUser;

	function renderDefault(): void {
	}
}
