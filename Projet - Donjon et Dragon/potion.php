<?php
class potion
{
	public $_vie;

	function __construct(){
		$this->_vie = rand(1,3);
	}
	function vie()
	{
		$_SESSION['hp'] += $this->_vie;

	}

}
