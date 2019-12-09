<?php
require_once("./class/Db.class.php");

class Discussion 
{
    

    public function getAll($id)
    {
        $sql = 'SELECT * FROM discussion WHERE idUserExpediteurDiscu = ? OR idUserDestinataireDiscu = ?';
        $db = new Db();
        return $db->ExecuteQuery($sql, array($id,$id));
    } 
    
}

?>

