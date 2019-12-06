<?php

use Forseti\Bot\Login\PageObject\LoginPageObject;

require __DIR__ . '/../vendor/autoload.php';

$html = new LoginPageObject();
$pagina = $html->getHtml();

//var_dump($pagina);
$filter = new \Forseti\Bot\Login\Parser\FilterParser($pagina);
$titulo = $filter->getTitulo();

var_dump($titulo);