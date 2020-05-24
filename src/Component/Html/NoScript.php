<?php namespace IamAdty\Component\Html;

use IamAdty\Component\Html;

class NoScript extends Html
{
	protected $tag = 'noscript';

	public function __construct(...$params)
	{
		if (count($params) == 0) {
			$params[] = 'Your browser does not support javascript!';
		}

		parent::__construct(...$params);
    }

    use HtmlTagBuilderTrait;
}
