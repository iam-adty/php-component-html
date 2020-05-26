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

    protected function paramType()
    {
        return array_merge(
            parent::paramType(),
            [
                'attribute' => Attribute::class
            ]
        );
    }

    protected function tagTemplate($tag = "", $content = "", $attribute = "")
    {
        if ($this->selfClose) {
            return "<{$tag}{$attribute} />";
        } else {
            return "<{$tag}{$attribute}>{$content}</$tag>";
        }
    }

    protected function compileAttribute()
    {
        $result = "";
        foreach ($this->attribute as $attribute) {
            /** @var Attribute $attribute */
            $result .= " " . $attribute->compile();
        }
        return $result;
    }

    public function compile()
    {
        $result = "";

        $attribute = $this->compileAttribute();
        $content = parent::compile();

        if ($this->tag == "html") {
            $result .= "<!doctype {$this->docType}>";
        }

        $result .= $this->tagTemplate($this->tag, $content, $attribute);

        return $result;
    }

    use HtmlTagBuilderTrait;
}
