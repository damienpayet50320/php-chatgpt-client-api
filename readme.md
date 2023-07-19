# ChatGPT PHP Client

The ChatGPT PHP Client is a simple PHP library that allows you to interact with the GPT-3.5 API provided by ChatGPT. This library provides an easy way to send prompts to the GPT-3.5 engine and get responses.

## Installation

You can install the ChatGPT PHP Client using [Composer](https://getcomposer.org/). Run the following command in your project directory:

> composer require damienpayet50320/php-chatgpt-client-api

## Usage

To use the ChatGPT PHP Client, you'll need an API key from ChatGPT. Once you have the API key, you can create an instance of the `ChatGPTClient` class and call the `completePrompt` method with your desired prompt.

Here's a simple example:

```php
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
```
Replace 'YOUR_API_KEY' with your actual ChatGPT API key.

### CompletePrompt options

* **temperature** (float, optional): Controls the randomness of the response. Higher values (e.g., 0.8) make the output more random, while lower values (e.g., 0.2) make it more deterministic and focused.


* **max_tokens** (integer, optional): Specifies the maximum number of tokens in the generated response. It allows you to limit the length of the generated text.


* **top_p** (float, optional): Also known as nucleus sampling or "penalty for words not in nucleus." It restricts the generated output to a cumulative probability until the specified value is reached.


* **frequency_penalty** (float, optional): This option allows you to tune the model to avoid repeating the same phrases or words in the output.


* **presence_penalty** (float, optional): This option encourages the model to include or avoid certain words in the output. A higher presence penalty discourages the model from using specific words, while a lower value encourages it.


* **stop** (string or array of strings, optional): You can provide a list of stop sequences to control the generation and make the model stop when it encounters any of these sequences in the output.

## Requirements

* PHP 8.0 or higher
* Guzzle HTTP Client 7.x

## Documentation

For more information on the available methods and options, please refer to the documentation.

## Contributing
Contributions to the ChatGPT PHP Client are welcome! If you find any issues or want to add new features, please submit a pull request or create an issue in the GitHub repository.

## License
This project is licensed under the MIT License.