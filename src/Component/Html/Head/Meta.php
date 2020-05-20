<?php namespace IamAdty\Component\Html\Head;

use IamAdty\Component\Html\HtmlTagBuilderTrait;
use IamAdty\Component\Html;

class Meta extends Html
{
    protected $tag = "meta";

    protected $selfClose = true;

    use HtmlTagBuilderTrait;
}
