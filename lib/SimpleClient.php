<?php

namespace ChurchTools;

use GuzzleHttp\Client;
use ChurchTools\Configuration;

class SimpleClient extends Client
{

    public function __construct(Configuration $config, array $options = [])
    {
        // Build Authorization header from config
        $apiKey = $config->getApiKey('Authorization');
        $prefix = $config->getApiKeyPrefix('Authorization');

        $authHeader = $prefix && $apiKey ? "$prefix $apiKey" : $apiKey;

        // Merge headers into Guzzle options
        $options['headers']['Authorization'] = $authHeader;

        // Optional: Set base_uri from config host
        if (!empty($config->getHost())) {
            $options['base_uri'] = $config->getHost();
        }

        parent::__construct($options);
    }

}
