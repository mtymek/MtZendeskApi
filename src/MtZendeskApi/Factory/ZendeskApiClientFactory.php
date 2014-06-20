<?php
/**
 * MtZendeskApi - ZF2 module wrapper around Zendesk PHP SDK
 *
 * @link      http://github.com/mtymek/MtZendeskApi
 * @copyright Copyright (c) 2014 Mateusz Tymek
 * @license   BSD 2-Clause
 */

namespace MtZendeskApi\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zendesk\API\Client;

class ZendeskApiClientFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return Client
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Configuration');
        $client = new Client($config['zendesk']['subdomain'], $config['zendesk']['username']);
        $client->setAuth('token', $config['zendesk']['token']);

        return $client;
    }
}
