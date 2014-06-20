<?php
/**
 * MtZendeskApi - ZF2 module wrapper around Zendesk PHP SDK
 *
 * @link      http://github.com/mtymek/MtZendeskApi
 * @copyright Copyright (c) 2014 Mateusz Tymek
 * @license   BSD 2-Clause
 */

namespace MtZendeskApi;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }
}
