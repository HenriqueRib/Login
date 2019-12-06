<?php

namespace Forseti\Bot\Login\PageObject;

class LoginPageObject extends AbstractPageObject
{
    public function getResposta()
    {
        return $this->client->request('GET', 'http://192.168.1.98:81/login');
    }

    public function getHtml()
    {
        return $this->getResposta()->getBody()->getContents();
    }
}