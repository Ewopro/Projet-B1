<?php

session_start();
$Tonneau = 30;

if (($_SESSION['or'] -  100) >= 0) {
	$_SESSION['hp'] = $_SESSION['hp'] + $Tonneau;
	$_SESSION['or'] = $_SESSION['or'] - 100;
	header("Location: boutique.php?msg=achatok");
}else {
	header("Location: boutique.php?msg=achatko");
}

?>		