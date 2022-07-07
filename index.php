<?php
require __DIR__ . '/vendor/autoload.php';
use chillerlan\QRCode\{QRCode, QROptions}; 

$code_data = base64_encode('SUJANEPANJAN'.time());
$myqrcode = (new QRCode)->render($code_data); //QR Code
//$generatorPNG = new \Picqer\Barcode\BarcodeGeneratorPNG();
//$data['mybarcode'] = base64_encode($generatorPNG->getBarcode($code_data, $generatorPNG::TYPE_CODE_128,2,120));
echo  '<img src="'.$myqrcode.'" class="img-fluid" width="350">';