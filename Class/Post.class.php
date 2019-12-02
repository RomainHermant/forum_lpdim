<?php
require_once("./class/Db.class.php");

class Post 
{
    public $id;
    public $contenu;
    public $createBy;
    public $date;
    

    public function loadDataByIdTopic($id)
    {
        $sql = 'SELECT * FROM post AS p INNER JOIN topic AS t ON p.idTopicPost = t.idTopic WHERE t.idTopic = ?';
        $db = new Db();
        return $db->ExecuteQuery($sql, $id);
    }

    public function create($param)
    {
        $sql = 'INSERT INTO post(contenuPost, datePost, idUserPost, idTopicPost) VALUES(?,CURDATE(),?,?)';
        $db = new Db();
        $db->ExecuteNonQuery($sql, $param);
        return $db;
    }

      
 
}


?>