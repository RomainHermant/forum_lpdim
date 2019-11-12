<?php
require("./class/Db.class.php");

class User 
{
    public $nom;
    public $prenom;
    public $email;
    public $pseudo;
    public $nbConnexion;
    public $lastConnexion;
    
    /*public function __construct(){
        $db = new Db();
        $rslt = $db->query('SELECT * FROM user')->fetchArray();
        $this->$nom = $rslt['nom'];
    }*/


    public function create($param)
    {
        $sql = 'INSERT INTO user(nom, prenom, email, pseudo, mdp) VALUES(?,?,?,?,?)';
        $db = new Db();
        $db->ExecuteNonQuery($sql, $param);
        return $db;
    }

    public function loadData()
    {
        $sql = 'SELECT * FROM user';
        $db = new Db();
        return $db->ExecuteQuery($sql);
    }

    public function nbMessage()
    {

    }
    
    
    
}

?>