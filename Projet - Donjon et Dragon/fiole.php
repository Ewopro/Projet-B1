<?php

session_start();
$Fiole = 5;

if(($_SESSION['or'] - 25 ) >= 0){
	$_SESSION['hp'] = $_SESSION['hp'] + $Fiole;
	$_SESSION['or'] = $_SESSION['or'] - 25;
	header("Location: boutique.php?msg=achatok");

}else {
	header("Location: boutique.php?msg=achatko");
}
?>		