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


    public function getDataByTheme($theme)
    {
        $sql = 'SELECT * FROM topic AS tp INNER JOIN theme AS tm ON tp.idThemeTopic = tm.idTheme WHERE libelleTheme = ?';
        $db = new Db();
        return $db->ExecuteQuery($sql, $theme);
    }

    public function create($param)
    {
        $sql = 'INSERT INTO topic(titreTopic, contenuTopic, lastUserTopic, lastDateTopic, idThemeTopic) VALUES(?,?,?,CURDATE(),?)';
        $db = new Db();
        $db->ExecuteNonQuery($sql, $param);
        return $db;
    }

    public function getContenuTopic ($id) {
        $sql = "SELECT * FROM topic AS t WHERE t.idTopic = ?";
        $db = new Db();
        return $db->ExecuteQuery($sql, $id);
    }


    
    
    
}

?>

