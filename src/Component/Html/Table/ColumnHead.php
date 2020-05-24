<?php namespace IamAdty\Component\Html\Table;

use IamAdty\Component\Html;
use IamAdty\Component\Html\HtmlTagBuilderTrait;

class ColumnHead extends Html
{
    protected $tag = 'th';

    use HtmlTagBuilderTrait;
}
