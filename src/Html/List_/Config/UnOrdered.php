<?php namespace IamAdty\Component\Html\List_;

use IamAdty\Config;
use IamAdty\Config\DefinedConfigTrait;

class UnOrdered extends Config
{
	protected $name = 'type';
	protected $value = 'u';

	use DefinedConfigTrait;
}
