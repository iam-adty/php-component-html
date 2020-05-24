<?php namespace IamAdty\Component\Html\Table;

use IamAdty\Component\Html;
use IamAdty\Component\Html\HtmlTagBuilderTrait;

class Body extends Html
{
    protected $tag = 'tbody';

    use HtmlTagBuilderTrait;
}
