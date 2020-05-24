<?php namespace IamAdty\Component\Html\Heading\Config;

use IamAdty\Config;
use IamAdty\Config\ConfigTrait;

class Level extends Config
{
	protected $name = 'level';

	use ConfigTrait;

	public static function I()
	{
		return new self(1);
	}

	public static function II()
	{
		return new self(2);
	}

	public static function III()
	{
		return new self(3);
	}

	public static function IV()
	{
		return new self(4);
	}

	public static function V()
	{
		return new self(5);
	}

	public static function VI()
	{
		return new self(6);
	}
}
