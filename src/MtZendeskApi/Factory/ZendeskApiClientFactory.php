<?php
/**
 * MtZendeskApi - ZF2 module wrapper around Zendesk PHP SDK
 *
 * @link      http://github.com/mtymek/MtZendeskApi
 * @copyright Copyright (c) 2014 Mateusz Tymek
 * @license   BSD 2-Clause
 */

namespace MtZendeskApi\Factory;

use Interop\Container\ContainerInterface;
use Zendesk\API\Client;

class ZendeskApiClientFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get('config');
        $client = new Client($config['zendesk']['subdomain'], $config['zendesk']['username']);
        $client->setAuth('token', $config['zendesk']['token']);
        return $client;
    }
}
