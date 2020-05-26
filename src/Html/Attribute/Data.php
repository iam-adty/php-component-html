<?php namespace IamAdty\Component\Html\Attribute;

use IamAdty\Component\Html\Attribute;
use IamAdty\Component\Html\Attribute\Data\Name;
use IamAdty\Component\Html\Attribute\Data\Value;

class Data extends Attribute
{
	protected $name = 'data';

	public function __construct(...$params)
	{
		$value = null;
		foreach ($params as $param) {
			if (is_a($param, Name::class)) {
				$this->name .= '-' . $param->getValue();
			} elseif (is_a($param, Value::class)) {
				$value = $param->getValue();
			} else {
				$value = $param;
			}
		}

		parent::__construct($this->name, $value);
    }

    public static function set(...$params)
    {
        return new self(...$params);
    }
}
