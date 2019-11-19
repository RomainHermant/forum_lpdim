<?php
require_once("./class/Db.class.php");

class User 
{
    public $nom;
    public $prenom;
    public $email;
    public $pseudo;
    public $nbConnexion;
    public $lastConnexion;
    
    public function __construct($id){
        $sql = 'SELECT * FROM user WHERE id = ?';
        $db = new Db();
        $exe = $db->ExecuteQuery($sql, array($id));
        while ($row = $exe->fetch())
        {
            $this->nom = $row['nom'];
            $this->prenom = $row['prenom'];
            $this->email = $row['email'];
            $this->pseudo = $row['pseudo'];
        }
    }


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

    public function getPseudo()
    {
        return $this->pseudo;
    }
    
    
    
}

?>