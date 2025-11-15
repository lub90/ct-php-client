<?php

namespace ChurchTools;

use GuzzleHttp\Client;
use ChurchTools\Configuration;
use \Psr\Http\Message\ResponseInterface;

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
            $host = rtrim($config->getHost(), '/');
            if (!str_ends_with($host, '/api')) {
                $host .= '/api';
            }
            $options['base_uri'] = $host . '/';
        }

        parent::__construct($options);
    }

    function decodeJson(ResponseInterface $response): array
    {
        $body = (string) $response->getBody();
        $decoded = json_decode($body, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \RuntimeException('Invalid JSON: ' . json_last_error_msg());
        }

        return $decoded;
    }

    public function getJson(string $uri, array $options = []): array
    {
        return $this->decodeJson($this->get($uri, $options));
    }

    public function postJson(string $uri, array $options = []): array
    {
        return $this->decodeJson($this->post($uri, $options));
    }

    public function putJson(string $uri, array $options = []): array
    {
        return $this->decodeJson($this->put($uri, $options));
    }

    public function deleteJson(string $uri, array $options = []): array
    {
        return $this->decodeJson($this->delete($uri, $options));
    }

    public function requestJson(string $method, string $uri, array $options = []): array
    {
        return $this->decodeJson($this->request($method, $uri, $options));
    }

}
