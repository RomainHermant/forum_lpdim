<?php
require_once("./class/Db.class.php");

class Topic 
{
    public $id;
    public $titre;
    public $contenu;
    public $pseudoCreateur;
    public $lastUser;
    public $lastDate;
    //public $idTheme;

     /*public function __construct(){
        
    }*/


    public function loadDataByTheme($theme)
    {
        $sql = 'SELECT * FROM topic AS tp INNER JOIN theme AS tm ON tp.idTheme = tm.id WHERE libelle = ?';
        $db = new Db();
        return $db->ExecuteQuery($sql, $theme);
    }

    public function create($param)
    {
        $sql = 'INSERT INTO topic(titre, contenuTp, lastUser, lastDate, idTheme) VALUES(?,?,?,CURDATE(),?)';
        $db = new Db();
        $db->ExecuteNonQuery($sql, $param);
        return $db;
    }


    
    
    
}

?>

