<?php
class attaque
{
	private $nbattaque;

	private $typeDesc = array(
		0	=>"Kuro",
		1	=>"Boogie",
		2	=>"Genki");

	function __construct(){
		$this->nbattaque = rand(0, (count($this->typeDesc)-1) );
	}
	public function action2() {
		switch($this->nbattaque) {
			case 0:
				$moins = 5;
				$_SESSION['force'] = $_SESSION['force'] - $moins;
				echo "Vous avez utiliser ". $moins .  " point de force";
				break;
			case 1:
				$moins = 3;
				$_SESSION['force'] = $_SESSION['force'] - $moins;
				echo "Vous avez utiliser ". $moins .  " point de force";
				break;
			case 2:
				$moins = 1;
				$_SESSION['force'] = $_SESSION['force'] - $moins;
				echo "Vous avez utiliser ". $moins .  " point de force";
				break;
		}
	}
		
