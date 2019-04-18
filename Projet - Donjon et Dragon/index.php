<!-------------------------------------------------------------------------------- Debut du code en php ----------------------------------------------------------->
<?php
	include ("header.php");
	
	require 'class/piece.php';
	require 'class/couloir.php';
	require 'class/salle.php';
	require 'potion.php';

	session_start();

	if (isset($_GET['action']) && ($_GET['action'])!="") {
	switch($_GET['action']){
		case 'usepotion':
			if($_SESSION['nbPotion']>0){
				$potion = new potion();
				$potion->vie();
				$_SESSION['nbPotion'] -= 1;
				break;
			}
		}
	}

	if(!isset($_SESSION['nbPotion'])) {
		$_SESSION['nbPotion'] = 0;
	}	

	if(!isset($_SESSION['or'])) {
		$_SESSION['or'] = 0;
	}

	if(!isset($_SESSION['hp'])) {
		$_SESSION['hp'] = 20;
	}
	if(!isset($_SESSION['force'])) {
		$_SESSION['force'] = 5;
	}
	if(!isset($_SESSION['Genki'])) {
		$_SESSION['Genki'] = 0;
	}

	if(!isset($_SESSION['Kuro'])) {
		$_SESSION['Kuro'] = 0;
	}
	if(!isset($_SESSION['Boogie'])) {
		$_SESSION['Boogie'] = 0;
	}
	if(!isset($_SESSION['piece'])) {
		$_SESSION['piece'] = array();
	}
?>
<!-------------------------------------------------------------------------------- création container gauche ------------------------------------------------->

<div class="container-gauche">
	<div class="container-gauchehaut">
		<div class="titre">
			<p>Inventaire</p>
		</div>
		<div class="texte">
			<p>Tu retrouvera ici plusieurs potion que tu recevras gratuitement lors du déroulement du jeu ! elle redonne entre 1 et 3 hp c'est toi et ta chance !  </p>
			
		</div>
			<table id="" class="display" width="90%">
					<div class="thead-font-color">
						<thead>
							<tr>
								<th>Objets</th>
								<th>Action</th>
							</tr>
						</thead>
					</div>
					<tbody>
							<tr>
								<td><?php  if($_SESSION['nbPotion']>0){?> Potions : <?php echo $_SESSION['nbPotion'];} ?></td>	
								<td>
									<?php  if($_SESSION['nbPotion']>0){?>
										<a href="index.php?action=usepotion" class="btn btn-primary">Utiliser</a> <?php } ?>
							</td>
							</tr>
					</tbody>
			</table>
	</div>
	

</div>
<!-------------------------------------------------------------------------------- création container droit ----------------------------------------------------------->

<div class="container-droite">
	<div class="titre">
		<p>Combat</p>
	</div>
	<div class="inventory">
		<table id="" class="display" width="90%">
				<div class="thead-font-color">
					<thead>
						<tr>
							<th>Attaque</th>
							<th>Action</th>
						</tr>
					</thead>
				</div>
				<tbody>
						<tr>
							<td>Kuro : 5pts</td>	
							<td><a href="" class="btn btn-primary">Utiliser</a> 
							</td>
						</tr>
						<tr>
							<td>Boogie : 3pts</td>	
							<td><a href="" class="btn btn-primary">Utiliser</a> 
							</td>
						</tr>
						<tr>
							<td>Genki : 1pts</td>	
							<td><a href="" class="btn btn-primary">Utiliser</a> 
							</td>
						</tr>
				</tbody>
			</table>
	 </div>
	 <div class="aide">
		<p>Aide : pts = point de force</p>
	</div>

</div>

<!-------------------------------------------------------------------------------- création container principal  ----------------------------------------------------------->

<div class="container-milieu">
		<div class="boutton">
			<a href="deco.php" class="btn btn-danger">Déconnexion</a>
			<?php  if ($_SESSION['hp'] >= 0 && $_SESSION['or'] <= 200) {?>
				<a href="" class="btn btn-primary big">Continuer</a>
			<?php } ?>

		</div>
		<div class="rowalert">
			<p>
				<?php  if ($_SESSION['hp'] <= 0) {?>
					<div class="alert alert-danger" role="alert">
					  Tu a perdu recommence ! 
					</div>
					<a href="deco.php" class="btn btn-danger">recommencer</a>
					<?php } ?>
				
				<?php  if ($_SESSION['or'] >= 200) {?>
					<div class="alert alert-success" role="alert">
					  Félicitation tu a gagner ! 
					</div>
					<a href="deco.php" class="btn btn-primary">Niveau suivant</a>
					<?php } ?>
				
				<?php  if ($_SESSION['force'] <= $_SESSION['Kuro'] ) {?>
					<div class="alert alert-danger" role="alert">
					  Tu ne peux pas utiliser cette attaque tu n'as pas assez de points de force ! 
					</div>
					<?php } ?>
				<?php  if ($_SESSION['force'] <= $_SESSION['Boogie'] ) {?>
					<div class="alert alert-danger" role="alert">
					  Tu ne peux pas utiliser cette attaque tu n'as pas assez de points de force ! 
					</div>
					<?php } ?>
				<?php  if ($_SESSION['force'] <= $_SESSION['Genki'] ) {?>
					<div class="alert alert-danger" role="alert">
					  Tu ne peux pas utiliser cette attaque tu n'as pas assez de points de force !
					</div>
					<?php } ?>
			</p>
		</div>
		<div class="row">
				<p><img src="img/or.png" > Vous avez <?php echo $_SESSION["or"];?> lingot d'or </p>
				<p><img src="img/hp.png" > Vous avez <?php echo $_SESSION["hp"];?> HP </p>
				<p><img src="img/force.png" > Vous avez <?php echo $_SESSION["force"];?> Points de force </p>
		</div>

		<div class="col-12 grey">
			<?php  
				$rand = rand(10,100);
				if($rand % 3 == 0 )
				{
					$piece = new Salle();
					$piece->action();
				}else{
					$piece = new Couloir();
				}
			?>
			<div class="content1">
				<?php
				echo $piece->getDescription();
				?>
			</div>
			<div class="content2">
				<?php
				echo $piece->getImage(); 
				?>
			</div>
			<div class="content3">
				<?php
				foreach ($_SESSION['piece'] as $value) {
					echo $value."<br />";
				}
				$_SESSION["piece"][] = $piece->getDescription();
				?>
			</div>
		</div>
	</div>
</div>

<!-------------------------------------------------------------------------------- j'inclus la page footer  ----------------------------------------------------------->

<?php include ("footer.php"); ?>

<!-------------------------------------------------------------------------------- fin  ------------------------------------------------------------------------------->