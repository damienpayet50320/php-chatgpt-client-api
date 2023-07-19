<?php

namespace ChatGPT;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class ChatGPTClient {

    private string $api_key;

    private Client $client;

    private string $base_url = 'https://api.openai.com/v1/';


    /**
     * @param string $api_key
     */
    public function __construct(string $api_key) {
        $this->api_key = $api_key;
        $this->client = new Client([
            'base_uri' => $this->base_url,
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $this->api_key,
            ],
        ]);
    }

    /**
     * @param string $prompt
     * @param array $options
     * @return mixed
     * @throws GuzzleException
     */
    public function completePrompt(string $prompt, array $options = []): mixed
    {
        $endpoint = 'engines/davinci-codex/completions';
        $data = array_merge(['prompt' => $prompt], $options);

        $response = $this->client->post($endpoint, [
            'json' => $data,
        ]);

        return json_decode($response->getBody(), true)['choices'][0]['text'];
    }
}