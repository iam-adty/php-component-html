<?php namespace IamAdty\Component\Html\Input;

use IamAdty\Component\Html\Attribute\Type;
use IamAdty\Component\Html\Input;

class Text extends Input
{
	public function __construct(...$params)
	{
		$this->attribute[] = Type::set('text');

		parent::__construct(...$params);
	}
}
