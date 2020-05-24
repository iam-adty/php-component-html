<?php namespace IamAdty\Component\Html;

use IamAdty\Component\Html;

class Meta extends Html
{
	protected $tag = 'meta';
    protected $selfClose = true;

    use HtmlTagBuilderTrait;
}
