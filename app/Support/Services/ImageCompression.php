<?php

namespace App\Support\Services;

use Tinify\Tinify;

/**
 * ImageCompression
 */
class ImageCompression
{
	/**
	 * @var Tinify\Tinify
	 */
	private $tinify;

	/**
	 * Constructor
	 *
	 * @param Tinify $tinify
	 */
	public function __construct(Tinify $tinify)
	{
		$this->tinify = $tinify;
	}

	/**
	 * Compress the image
	 *
	 * @param  string $from_path
	 * @param  string $to_path
	 * @return string
	 */
	public function compress(string $from_path, string $to_path = '')
	{
		if (!$to_path) {
			$to_path = $from_path;
		}

		try {
		    \Tinify\fromFile($from_path)->toFile($to_path);
		} catch (\Exception $e) {}

		return $to_path;
	}
}