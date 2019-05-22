<?
    function getVocab_lists($language_id=null){
        global $db;
        if($language_id !== null){
            $where = "WHERE language_id = $language_id";
        } else {
            $where = "";
        }
        $query = "SELECT * FROM vocab_lists
            $where
            ORDER BY name";
        $statement = $db->prepare($query);
        $statement->execute();
        $vocab_lists = $statement->fetchAll();
        $statement->closeCursor();
        return $vocab_lists;
    }
?>