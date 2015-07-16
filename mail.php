<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Новая заявка на сотрудничество</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php echo file_get_contents('http://nldigital.ru/common/header.php'); ?>
	<?php
error_reporting(E_ALL);
$name = trim(strip_tags($_POST['name']));
$mail = trim(strip_tags($_POST['email']));
$city = trim(strip_tags($_POST['city']));
$phone = trim(strip_tags($_POST['phone']));
$site = trim(strip_tags($_POST['site']));


$to = 'riaron86@mail.ru';
$subject = "=?utf-8?B?" . base64_encode("Новая заявка на сотрудничество") . "?=";
$message = "<p>Получена новая заявка на сотрудничество</p>
<h1>Данные заказчика:</h1>	
<ul style=\"margin:0; padding:0;\">
  	<li style=\"list-style:none;\"><b>Имя: </b>".$name."</li>
  	<li style=\"list-style:none;\"><b>E-mail: </b>".$mail."</li>
  	<li style=\"list-style:none;\"><b>Город: </b>".$city."</li>
  	<li style=\"list-style:none;\"><b>Телефон: </b>".$phone."</li>
  	<li style=\"list-style:none;\"><b>Сайт: </b>".$site."</li>
</ul>";
$headers .= "From:"."=?utf-8?B?" . base64_encode("Brand-Maker") . "?=". "<info@brand-maker.ru>\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

if(mail($to, $subject, $message, $headers)) {
	//echo "<div class=\"alert alert-success\" role=\"alert\">Письмо отправлено</div>";
	//header('Location: http://www.nldigital.ru');

	header('Refresh:6 ; URL=http://www.nldigital.ru');
	echo "<p style='color:red; text-align:center;font-size: 25px; margin-top: 100px;'>Спасибо за сообщение! <br> Письмо успешно отправлено.";
} else {
	echo "<div class=\"alert alert-danger\" role=\"alert\">Письмо не отправлено</div>";
}

?>
</body>
</html>


