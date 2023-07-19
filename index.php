<?php

require_once 'vendor/autoload.php';

use ChatGPT\ChatGPTClient;

$api_key = 'YOUR_API_KEY';
$client = new ChatGPTClient($api_key);

$prompt = 'Hello, I need assistance in writing a paragraph about climate change.';
$options = [
    'temperature' => 0.7,
    'max_tokens' => 100
];

$result = $client->completePrompt($prompt, $options);

echo $result;