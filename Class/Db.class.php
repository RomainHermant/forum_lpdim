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

	public function ExecuteNonQuery($sql, $param=null)
	{
		$req = $this->bdd->prepare($sql);
		$req->execute($param);
	}

	public function ExecuteQuery($sql, $param=null)
	{
		$req = $this->bdd->prepare($sql);
		$req->execute($param);
		return $req;
	}
}
?>