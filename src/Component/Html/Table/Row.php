<?php namespace IamAdty\Component\Html\Table;

use IamAdty\Component\Html;
use IamAdty\Component\Html\HtmlTagBuilderTrait;

class Row extends Html
{
    protected $tag = 'tr';

    use HtmlTagBuilderTrait;
}
