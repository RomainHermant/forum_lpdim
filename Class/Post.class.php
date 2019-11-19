<?php
require("./class/Db.class.php");

class Post 
{
    public $id;
    public $contenu;
    public $createBy;
    public $date;
    

    public function loadDataByIdTopic($id)
    {
        $sql = 'SELECT * FROM post AS p INNER JOIN topic AS t ON p.idTopic = t.id WHERE p.idTopic = ?';
        $db = new Db();
        return $db->ExecuteQuery($sql, $id);
    }

      
 
}


?>