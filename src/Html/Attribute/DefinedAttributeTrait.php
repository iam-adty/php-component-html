<?php namespace IamAdty\Component\Html\Attribute;

trait DefinedAttributeTrait
{
    public function __construct()
    {
        parent::__construct($this->name, $this->value);
    }
}
