<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require  './vendor/autoload.php';
use chillerlan\QRCode\{QRCode, QROptions}; 

$code_data = base64_encode('SUJANEPANJAN'.time());
$myqrcode = (new QRCode)->render($code_data); //QR Code
//$generatorPNG = new \Picqer\Barcode\BarcodeGeneratorPNG();
//$data['mybarcode'] = base64_encode($generatorPNG->getBarcode($code_data, $generatorPNG::TYPE_CODE_128,2,120));
echo  '<img src="'.$myqrcode.'" class="img-fluid" width="350">';
echo '<hr>'; 
echo 'Server IP: '. $_SERVER['SERVER_ADDR'] . '<br>' ;
echo 'Public IP: '. file_get_contents('https://icanhazip.com/');
