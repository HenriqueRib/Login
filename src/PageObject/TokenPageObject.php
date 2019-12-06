<?php

namespace Forseti\Bot\Login\PageObject;

use Forseti\Bot\Login\Parser\AbstractParser;
use Forseti\Bot\Login\Parser\TokenParser;

class TokenPageObject extends AbstractPageObject
{

    public function getParser($html)
    {
        return new TokenParser($html);
    }

}