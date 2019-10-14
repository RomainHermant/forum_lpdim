<?php
class Db {

	public $bdd;

	public function __construct() {
		try
		{
			$this->bdd = new PDO('mysql:host=localhost;dbname=forum;charset=utf8', 'root', '');
		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}	
	}

	public function ExecuteNonQuery($query, $param=null)
	{
		$req = $this->bdd->prepare($sql);
		$req->execute($param);
	}

	public function ExecuteQuery($query)
	{
		$rslt = $this->bdd->query($sql);
		return $rslt;
	}
}
?>