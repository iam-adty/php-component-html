<?php namespace IamAdty\Component\Html\Table;

use IamAdty\Component\Html;
use IamAdty\Component\Html\HtmlTagBuilderTrait;

class Column extends Html
{
    protected $tag = 'td';

    use HtmlTagBuilderTrait;
}
