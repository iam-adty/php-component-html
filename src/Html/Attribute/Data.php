<?php namespace IamAdty\Component\Html\Attribute;

use IamAdty\Component\Html\Attribute;
use IamAdty\Component\Html\Attribute\Data\Name;
use IamAdty\Component\Html\Attribute\Data\Value;

class Data extends Attribute
{
	public $name = 'data';

	public function __construct(...$params)
	{
		$value = null;
		foreach ($params as $param) {
			if (is_a($param, Name::class)) {
				$this->name .= '-' . $param->name;
			} elseif (is_a($param, Value::class)) {
				$value = $param->value;
			} else {
				$value = $param;
			}
		}

		parent::__construct($this->name, $value);
	}
}
