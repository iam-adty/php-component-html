<?php namespace IamAdty\Component\Html;

use IamAdty\Component\Html;
use IamAdty\Component\Html\HtmlSelfClosingTagTrait;

class HorizontalRule extends Html
{
	protected $tag = 'hr';
    protected $selfClose = true;

    use HtmlTagBuilderTrait;
}
