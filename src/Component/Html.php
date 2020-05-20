<?php namespace IamAdty\Component;

use IamAdty\Component\Html\HtmlTagBuilderTrait;
use IamAdty\Component;

class Html extends Component
{
    protected $tag = "html";

    protected $selfClose = false;

    protected $attribute = [];

    protected $config = [];

    protected function tagTemplate($tag = "", $content = "", $attribute = "")
    {
        if ($this->selfClose) {
            return "<{$tag}{$attribute} />";
        } else {
            return "<{$tag}{$attribute}>{$content}</$tag>";
        }
    }

    public function compile()
    {
        $content = parent::compile();
        return $this->tagTemplate($this->tag, $content);
    }

    use HtmlTagBuilderTrait;
}
