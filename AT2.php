<?php
//The VAT rate percentage.
$vat = 15.0;

//The Price Excluding VAT
$priceExVat = 1000;

//Calculate VAT
$vat = ($priceExVat / 100) * $vat;

echo "VAT over an amount :".number_format($vat, 2);
?>