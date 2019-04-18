<!-------------------------------------------------------------------------------- Identification ------------------------------------------------------->

<?php
	include ("header.php");
	$logged =false;

	if (isset($_POST['send'])){
		$logged =true;
	}
    if ( isset($_POST['Username']) && isset($_POST['pwd']) && $_POST ['Username'] == "admin"  && $_POST['pwd'] == "admin" ) {
        session_start ();
        $_SESSION['Username'] = $_POST['Username'];
        $_SESSION['pwd'] = $_POST['pwd'];
        header('Location: jquery.php');
 		exit();	
 	}
?>

<!-------------------------------------------------------------------------------- Container identification ---------------------------------------------------->

<div class="container-bis">
	<form action="" method="POST">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Username</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Username" placeholder="Entre votre Identifiant" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pwd">
		  </div>
		  <?php 
			if ($logged) {
				echo '<div class="alert alert-danger" role="alert">
								Merci d\'utiliser le compte admin !
				</div>';
			}
			?>
		  <button type="submit" name="send" class="btn btn-primary">Submit</button>
	</form>
</div>

<!--------------------------------------------------------------------------------On inclus le footer ------------------------------------------------------->

<?php include("footer.php");?>

<!-------------------------------------------------------------------------------- Fin ---------------------------------------------------------------------->

