<?php namespace IamAdty\Component\Html;

use IamAdty\Component\Html;

class Track extends Html
{
	protected $tag = 'track';
    protected $selfClose = true;

    use HtmlTagBuilderTrait;
}
