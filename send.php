<?php
$Name = htmlspecialchars($_POST['name']);
$Phone = htmlspecialchars($_POST['phone']);
$Mail = htmlspecialchars($_POST['email']);
$Message = htmlspecialchars($_POST['message']);

$curepo = "<h3>Mensaje Recibido desde ecozonemx.com</h3><hr style='background-color:#ccc; border:none; height:1px;'/><div style='text-align:left; font-size:12px; font-weight:bold; width:auto; padding:10px 20px;'>Nombre: ".$Name."<br/> e-mail: ".$Mail."<br/> Telefono: ".$Phone."</div><div>".$Message."</div>";

$headers = "From: ".$Name." <webform@hluna88.com>\n";
			$headers .= "X-Sender: < webform@hluna88.com >\n";
			$headers .= "X-Priority: 1\n"; // Urgent message!
			$headers .= "Return-Path: < webform@hluna88.com >\n";  // Return path for errors
			$headers .= "X-Mailer: PHP/" . phpversion() . " \r\n";
			$headers .= "Mime-Version: 1.0 \r\n";
			$headers .= "Content-type: text/html; charset=utf-8\r\n";

mail("contacto@hluna88.com", "Mensaje enviado desde ecozonemx.com", $curepo, $headers);


echo "<p class='thank-you-msg' >Gracias ".$Name.", tu mensaje ha sido enviado.</p>";
echo "<script type='text/javascript'>$('#nombre').val('').focus(); $('#email').val(''); $('#telefono').val(''); $('#mensaje').val('');</script>";
?>