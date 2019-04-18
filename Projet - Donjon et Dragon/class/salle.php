<?php 

class Salle extends piece{
	private $nbType;

	private $typeDescription = array(
		0	=>"Vous entrez dans une salle, poussez une porte Un coffre débordant d'or s'y trouve vous vous empressez de remplir vos poches",
		1	=>"Vous entrez dans une salle. Il n'y a rien sauf un peu de poussières (vous étes asthmatique)",
		2	=>"Vous entre dans une salle. Une énorme bête s'y trouve et vous saute dessus, vous esquivez mais il reussit à vous blessé ! , courrez !",
		3	=>"Vous entrez dans une salle. Un sachet rempli d'or se trouve sur le sol vous le ramassez , mais c'etait un piege vous vous faites piquer par une migale !",
		4	=>"Vous entrez dans une salle. Une jolie femme s'y trouve et tente de vous séduire vous lui mettez un rateau et reparter avec une potion",
		5	=>"Jojo debarque et vous propose une biere : il fini ivre et vous frappe , faite attention à vous !");

	function __construct(){
		$this->nbType = rand(0, (count($this->typeDescription)-1) );
	}

	function getDescription(){
		return $this->typeDescription[$this->nbType];
	}

	function getImage(){
		switch ($this->nbType) {
			case 0:
				echo '<br /><img src="img/coffre.jpg"';
				break;
			case 1:
				echo '<br /><img src="img/mine.jpg"';
				break;
			case 2:
				echo '<br /><img src="img/bete.jpg"';
				break;
			case 3:
				echo '<br /><img src="img/migale.jpg"';
				break;
			case 4:
				echo '<br /><img src="img/jolie.jpg"';
				break;
			case 5:
				echo '<br /><img src="img/jojo.jpg"';
				break;
		}
	}


	public function action() {
		switch($this->nbType) {
			case 0:
				$plus = rand(20,40);
				$_SESSION['or'] = $_SESSION['or'] + $plus ;
				echo "Vous avez gagner ". $plus .  " Or";
				break;
			case 1:
				$moins = rand(2,3);
				$_SESSION['hp'] = $_SESSION['hp'] - $moins ;
				echo "Vous avez perdu ". $moins .  " HP";
				break;
			case 2:
				$moins = rand(2,3);
				$_SESSION['hp'] = $_SESSION['hp'] - $moins ;
				echo "Vous avez perdu ". $moins .  " HP";
				break;
			case 3:
				$plus = rand(20,40);
				$moins = rand(3,4);
				$_SESSION['or'] = $_SESSION['or'] + $plus ;
				$_SESSION['hp'] = $_SESSION['hp'] - $moins ;
				echo "Vous avez gagner ". $plus .  " Or mais vous avez perdu ".$moins." HP";
				break;
			case 4:
				$plus = rand(0,4);
				$_SESSION['hp'] = $_SESSION['hp'] + $plus ;
				$_SESSION['nbPotion'] = $_SESSION['nbPotion'] + 1;
				echo "Vous avez gagner ". $plus .  " HP";
				break;
			case 5:
				$plus = 5;
				$moins = rand(2,3);
				$_SESSION['force'] = $_SESSION['force'] + $plus ;
				$_SESSION['hp'] = $_SESSION['hp'] - $moins;
				$_SESSION['Kuro'] = 0;
				$_SESSION['Genki'] = 0;
				$_SESSION['Boogie'] = 0;
				echo "Après la tarte de jojo qui vous a fait perdre ".$moins." Hp , Sa bierre t'apporte de la force ! tu gagne ". $plus . " point de force ! ";
				break;
		}
	}
}
