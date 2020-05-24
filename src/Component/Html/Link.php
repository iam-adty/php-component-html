<?php namespace IamAdty\Component\Html;

use IamAdty\Component\Html;

class Link extends Html
{
	protected $tag = 'link';
    protected $selfClose = true;

    use HtmlTagBuilderTrait;
}
