<?php namespace IamAdty\Component\Html\Attribute;

use MatthiasMullie\Minify\CSS;
use IamAdty\Component\Html\Attribute;

class Style extends Attribute
{
	public $name = 'style';

	public function __construct(...$params)
	{
		$value = '';
		foreach ($params as $param) {
			if (is_subclass_of($param, Style::class)) {
				$value .= $param->render();
			} else {
				$value .= $param;
			}
		}

		$minifier = new CSS();
		$minifier->add($value);

		parent::__construct($this->name, $minifier->minify());
	}
}
