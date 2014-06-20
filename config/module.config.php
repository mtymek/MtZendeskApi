<?php
/**
 * MtZendeskApi - ZF2 module wrapper around Zendesk PHP SDK
 *
 * @link      http://github.com/mtymek/MtZendeskApi
 * @copyright Copyright (c) 2014 Mateusz Tymek
 * @license   BSD 2-Clause
 */

return [
    'zendesk' => [
        'subdomain' => '',
        'username' => '',
        'token' => '',
    ],
    'service_manager' => [
        'factories' => [
            'Zendesk\API\Client' => 'ZendeskApiModule\Factory\ZendeskApiClientFactory'
        ],
    ]
];
