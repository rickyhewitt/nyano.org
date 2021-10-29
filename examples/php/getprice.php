<?php

/* 
    Nyano price example
    Uses coingecko API
*/

// Get nano price
$nano_price = json_decode(file_get_contents('https://api.coingecko.com/api/v3/simple/price?ids=nano&vs_currencies=usd'));
$nano_price_value = $nano_price->nano->usd;

// Calculate Nyano price
$nyano_price = bcdiv($nano_price_value, '1000000000', 10);
$nyano_price_value = number_format($nyano_price, 0, '', '');

// Display output
echo "Nano price: " . $nano_price_value . "<br />";
echo "Nyano price: " . (string)$nyano_price;

?>
