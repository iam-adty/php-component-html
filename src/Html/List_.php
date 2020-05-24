<?php namespace IamAdty\Component\Html;

use IamAdty\Component\Html;

class List_ extends Html
{
	protected $tag = 'l';

    protected $type = 'o';

	public function __construct(...$params)
	{
		parent::__construct(...$params);

		$this->tag = $this->type . $this->tag;
    }

    use HtmlTagBuilderTrait;
}
