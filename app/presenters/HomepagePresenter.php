<?php

namespace App\Presenters;

use Nette;
use App\Model;


class HomepagePresenter extends BasePresenter
{

	public function renderDefault($albumId)
	{
		$this->template->albumId = $albumId;
	}

}
