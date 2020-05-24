<?php namespace IamAdty\Component\Html;

use IamAdty\Component\Html;

class Break_ extends Html
{
	protected $tag = 'br';
    protected $selfClose = true;

    use HtmlTagBuilderTrait;
}
