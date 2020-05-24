<?php namespace IamAdty\Component\Html;

use IamAdty\Component\Html;

class BidirectionalIsolation extends Html
{
    protected $tag = 'bdi';

    use HtmlTagBuilderTrait;
}
