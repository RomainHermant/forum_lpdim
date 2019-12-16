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
    public $avatar;
    
    public function __construct($id=null){
        $sql = 'SELECT * FROM user WHERE idUser = ?';
        $db = new Db();
        $exe = $db->ExecuteQuery($sql, array($id));
        while ($row = $exe->fetch())
        {
            $this->nom = $row['nomUser'];
            $this->prenom = $row['prenomUser'];
            $this->email = $row['emailUser'];
            $this->pseudo = $row['pseudoUser'];
            $this->avatar = $row['avatar'];
        }
    }

    public function create($param)
    {
        $sql = 'INSERT INTO user(nomUser, prenomUser, emailUser, pseudoUser, mdpUser) VALUES(?,?,?,?,?)';
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

    public function updateAvatar($param)
    {
        $sql = 'UPDATE user SET avatar = ? WHERE idUser = ?';
        $db = new Db();
        $db->ExecuteNonQuery($sql, $param);
    }
    
    public function getAvatar()
    {
        return $this->avatar;
    } 
}

?>