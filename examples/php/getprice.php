<?php

/* 
    Nyano price example
    Uses coingecko API
*/

require 'vendor/autoload.php';

use Codenixsv\CoinGeckoApi\CoinGeckoClient;

// Initialize API
$client = new CoinGeckoClient();
$data = $client->ping();

// Get nano price
$nano_price = $client->simple()->getPrice('nano', 'usd');
$nano_price_value = $nano_price['nano']['usd'];

// Calculate Nyano price
$nyano_price = bcdiv($nano_price_value, '100000000000', 13);
$nyano_price_value = number_format($nyano_price, 0, '', '');

// Display output
echo "Nano price: " . $nano_price_value . "<br />";
echo "Nyano price: " . (string)$nyano_price;

?>