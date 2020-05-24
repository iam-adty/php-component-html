<?php namespace IamAdty\Component\Html;

use IamAdty\Component\Html;

class Image extends Html
{
	protected $tag = 'img';
    protected $selfClose = true;

    use HtmlTagBuilderTrait;
}
