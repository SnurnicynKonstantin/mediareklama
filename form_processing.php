<?php 
	
	$Name = $_POST['name'];
	$Phone = $_POST['telephone'];
	$Mail = $_POST['mail'];

	$dateNow = date("Y-m-d");

	$message = "
	Заявка на размещение рекламы
	Имя: ".htmlspecialchars($Name)."
	Телефон: ".htmlspecialchars($Phone)."
	Почта: ".htmlspecialchars($Mail);

	mail("8101980@mail.ru", "Заявка на размещение рекламы", $message);
    mail("ks_on_v@mail.ru", "Заявка на размещение рекламы", $message);

	$f = fopen("loggs.txt", "a");
	fwrite($f, "\r\n" .$message); 
	fclose($f);
?>	