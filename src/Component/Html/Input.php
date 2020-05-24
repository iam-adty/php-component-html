<?php namespace IamAdty\Component\Html;

use IamAdty\Component\Html;

class Input extends Html
{
	protected $tag = 'input';
    protected $selfClose = true;

    use HtmlTagBuilderTrait;
}
