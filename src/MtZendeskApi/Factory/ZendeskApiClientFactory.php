<?php
/**
 * MtZendeskApi - ZF2 module wrapper around Zendesk PHP SDK v2
 *
 * @link      http://github.com/mtymek/MtZendeskApi
 * @copyright Copyright (c) 2014 Mateusz Tymek
 * @license   BSD 2-Clause
 */

namespace MtZendeskApi\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zendesk\API\HttpClient as ZendeskAPI;

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
        $client = new ZendeskAPI($config['zendesk']['subdomain'], $config['zendesk']['username']);
        $client->setAuth('basic', ['username' => $config['zendesk']['username'], 'token' => $config['zendesk']['token']]);

        return $client;
    }
}
