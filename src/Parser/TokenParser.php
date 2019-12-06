<?php

namespace Forseti\Bot\Login\Parser;

class TokenParser extends AbstractParser
{
    public function getToken()
    {
        return TokenRegex::getToken($this->crawler->filterXPath("//body/p")->text());
    }
}