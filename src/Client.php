<?php

declare(strict_types=1);

namespace Devscast\Orange\Sms;

use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Class Client
 * @package Devscast\Orange\Sms
 * @author bernard-ng <ngandubernard@gmail.com>
 */
class Client
{
    protected HttpClientInterface $client;
}
