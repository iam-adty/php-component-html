<?php namespace IamAdty\Component\Html;

use IamAdty\Component\Html;

class Base extends Html
{
	protected $tag = 'base';
    protected $selfCLose = true;

    use HtmlTagBuilderTrait;
}
