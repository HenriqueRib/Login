<?php

namespace Forseti\Bot\Login\PageObject;

use Forseti\Bot\Login\Singleton\ClientSingleton;
use GuzzleHttp\ClientInterface;

abstract class AbstractPageObject
{
     protected $client;
     public function __construct(ClientInterface $client = null)
     {
         $this->client = ($client) ?? ClientSingleton::getInstance();
     }

}