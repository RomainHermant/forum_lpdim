<?php
require("./class/Db.class.php");

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
        $sql = 'SELECT * FROM topic';
        $db = new Db();
        return $db->ExecuteQuery($sql);
    }


    
    
    
}

?>

