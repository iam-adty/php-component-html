<?php

use IamAdty\Component\Html\Body;
use IamAdty\Component\Html\Body\Div;
use IamAdty\Component\Html\Head;
use IamAdty\Component\Html\Head\Title;
use IamAdty\Component\Html;
use IamAdty\Component\Text;

require_once __DIR__ . '/../vendor/autoload.php';

/** @var Html $html */
$html =
Html::build(
    Head::build(
        Title::build(
            Text::write('PHP Web Component')
        )
    ),
    Body::build(
        Div::build(
            Text::write('PHP Web Component')
        )
    )
);

d($html->compile());
