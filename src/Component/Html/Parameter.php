<?php namespace IamAdty\Component\Html;

use IamAdty\Component\Html;

class Parameter extends Html
{
	protected $tag = 'param';
    protected $selfClose = true;

    use HtmlTagBuilderTrait;
}
