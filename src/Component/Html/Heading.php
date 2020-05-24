<?php namespace IamAdty\Component\Html;

use IamAdty\Component\Html;

class Heading extends Html
{
	protected $tag = 'h';
	protected $level = 1;

	public function __construct(...$params)
	{
		parent::__construct(...$params);

		$this->tag = $this->tag . strval($this->level);
	}
}
