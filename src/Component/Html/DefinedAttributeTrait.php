<?php namespace IamAdty\Component\Html;

trait DefinedAttributeTrait
{
    public function __construct()
    {
        parent::__construct($this->name, $this->value);
    }
}
