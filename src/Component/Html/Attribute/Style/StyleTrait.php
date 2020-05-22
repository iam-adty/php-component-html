<?php namespace IamAdty\Component\Html\Attribute\Style;

trait StyleTrait {
    public function __construct($value)
    {
        $this->value = $value;
    }

    public function render()
    {
        return "{$this->name}: {$this->value};";
    }
}
