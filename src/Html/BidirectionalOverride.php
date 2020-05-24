<?php namespace IamAdty\Component\Html;

use IamAdty\Component\Html;

class BidirectionalOverride extends Html
{
    protected $tag = 'bdo';

    use HtmlTagBuilderTrait;
}
