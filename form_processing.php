<?php 
	
	$Name = $_POST['name'];
	$Phone = $_POST['telephone'];
	$Mail = $_POST['email'];

	$dateNow = date("Y-m-d");

	$message = "
	Заявка на размещение рекламы
	Имя: ".htmlspecialchars($Name)."
	Телефон: ".htmlspecialchars($Phone)."
	Почта: ".htmlspecialchars($Mail);

	mail("8101980@mail.ru", "Заявка на размещение рекламы", $message);
    mail("ks_on_v@mail.ru", "Заявка на размещение рекламы", $message);
 
?>	
