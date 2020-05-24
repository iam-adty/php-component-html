<?php namespace IamAdty\Component\Html;

use IamAdty\Component\Html;

class Source extends Html
{
	protected $tag = 'source';
    protected $selfClose = true;

    use HtmlTagBuilderTrait;
}
