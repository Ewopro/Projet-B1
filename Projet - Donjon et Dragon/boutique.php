<!-------------------------------------------------------------------------------- Debut du code en php ----------------------------------------------------------->
<?php 
	include ("header.php"); 
	session_start();
	if(!isset($_SESSION['or'])) {
		$_SESSION['or'] = 0;
	}
	if(!isset($_SESSION['Tonneau'])) {
		$_SESSION['Tonneau'] = 30;
	}

	if(!isset($_SESSION['hp'])) {
		$_SESSION['hp'] = 20;
	}
?>
<!-------------------------------------------------------------------------------- Container vie , or et force du joueur ---------------------------------------------------->

<div class="container">
	<div class="row">
		<div class="col">
			<img src="img/or.png" > Vous avez <?php echo $_SESSION["or"];?> lingot d'or </div>
		<div class="col">
			<img src="img/hp.png" > Vous avez <?php echo $_SESSION["hp"];?> HP </div>
		<div class="col">
			<img src="img/force.png" > Vous avez <?php echo $_SESSION["force"];?> Points de force </div>
	</div>
</div>

<!-------------------------------------------------------------------------------- Container qui renvoie des alerts --------------------------------------------------------->

<?php if (isset($_GET['msg'])) { ?>
	
	<?php if($_GET['msg'] == "achatko") { ?>
		<div class="row-alert">
			<p>
				<div class="alert alert-danger" role="alert">
					Attention tu n'as pas assez d'argent pour acheter cette item ! 
				</div>
			</p>
		</div>
	<?php } ?>

	<?php if($_GET['msg'] == "achatok"){ ?>
		<div class="row-alert">
			<p>
				<div class="alert alert-success" role="alert">
					L'achat à bien éte effectue ! 
				</div>
			</p>
		</div>
	<?php } ?>

<?php } ?>

<!-------------------------------------------------------------------------------- Container contenant le tableau ----------------------------------------------------------->
<div class="container-table">
		<div class="titre">
			<p>Boutique</p>
		</div>
		<table id="" class="display" width="90%">
					<div class="theadbis">
						<thead>
							<tr>
								<th>Objets</th>
								<th>Nom</th>
								<th>Gain de vie</th>
								<th>Prix</th>
								<th>Action</th>
							</tr>
						</thead>
					</div>
					<tbody>
							<tr>
								<td><img src="img/potion3.png" ></td>
								<td>Gourde du brave</td>
								<td>30 HP</td>
								<td>100 lingot d'or</td>	
								<td>
									<a href="tonneau.php" class="btn btn-primary">Acheter</a>
								</td>	
							</td>
							</tr>
							<tr>
								<td><img src="img/potion1.png" ></td>
								<td>Potion</td>
								<td>15 HP</td>
								<td>50 lingot d'or</td>	
								<td>
									<a href="potion1.php" class="btn btn-primary">Acheter</a>
								</td>	
							</td>
							</tr>
							<tr>
								<td><img src="img/potion2.png" ></td>
								<td>Fiole</td>
								<td>5 HP</td>
								<td>25 lingot d'or</td>	
								<td>
									<a href="Fiole.php" class="btn btn-primary">Acheter</a>
								</td>	
							</td>
							</tr>
					</tbody>
			</table>
</div>

<!-------------------------------------------------------------------------------- j'inclus le footer ----------------------------------------------------------->

<?php include ("footer.php"); ?>

<!-------------------------------------------------------------------------------- Fin -------------------------------------------------------------------------->