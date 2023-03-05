<?php
$service = $_POST['usl'];
$name = $_POST['name'];
$tel = $_POST['tel'];


$service = htmlspecialchars($service);
$name = htmlspecialchars($name);
$tel= htmlspecialchars($tel);


$service = urldecode($services);
$name = urldecode($name);
$tel= urldecode($tel);


$service = trim($service);
$name = trim($name);
$tel= trim($tel);


$message = '';
$message .= '<h1>Заказ обратного заонка</h1>';
$message .='<p>Услуга: '.$service.'</p>';
$message .='<p>Имя: '.$name.'</p>';
$message .='<p>Телефон: '.$tel.'</p>';

$to = 'guseva.v.olegovna@yandex.ru'.',';
$spectext = '<!DOCTYPE HTML><html><head><title>Заказ</title></head><body>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$m = mail($to, 'Письмо с сайта', $spectext.$message.'</body></html>', $headers);

if ($m) {echo 1;} 
else {echo 0;}





   


?>
