<?php namespace IamAdty\Component;

use IamAdty\Component\Html\HtmlTagBuilderTrait;
use IamAdty\Component;
use IamAdty\Component\Html\Attribute;

class Html extends Component
{
    protected $tag = "html";
    protected $selfClose = false;
    protected $attribute = [];

    protected $docType = "html";

    public function __construct(...$params)
    {
        parent::__construct(...$params);

        if ($this->tag != "html") {
            unset($this->docType);
        }
    }

    protected function _paramType()
    {
        return array_merge(
            parent::_paramType(),
            [
                'attribute' => Attribute::class
            ]
        );
    }

    public function construct()
    {
        $result = "";
        if ($this->tag == "html") {
            $result .= "<!doctype {$this->docType}>";
        }

        if ($this->selfClose) {
            $result .= "<{$this->tag}{${$this->_constructAttribute()}} />";
        } else {
            $result .= "<{$this->tag}{${$this->_constructAttribute()}}>{${parent::_constructChildren()}}</$this->tag>";
        }

        return $result;
    }

    protected function _constructAttribute()
    {
        $result = "";
        foreach ($this->attribute as $attribute) {
            /** @var Attribute $attribute */
            $result .= " " . $attribute->compile();
        }
        return $result;
    }

    use HtmlTagBuilderTrait;
}
