<?php

session_start();
$Potion1 = 15;

if(($_SESSION['or'] - 50) >= 0){
	$_SESSION['hp'] = $_SESSION['hp'] + $Potion1;
	$_SESSION['or'] = $_SESSION['or'] - 50;
	header("Location: boutique.php?msg=achatok");

}else {
	header("Location: boutique.php?msg=achatko");
}
?>		