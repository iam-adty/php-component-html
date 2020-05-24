<?php namespace IamAdty\Component\Html;

trait AttributeTrait {
    public function __construct($value)
    {
        parent::__construct($this->name, $value);
    }
}
