<?php

namespace App\Support\Services;

use Tinify\Tinify;

class ImageCompression
{
	private $tinify;

	public function __construct(Tinify $tinify)
	{
		$this->tinify = $tinify;
	}


}