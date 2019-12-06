<?php

namespace Forseti\Bot\Login\Parser;

class FilterParser extends AbstractParser
{
    public function getTitulo()
    {
        return  $this->crawler->filter('title')->text();
            }
}