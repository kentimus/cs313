<?
    function getVocab_words($vocab_list_id){
        global $db;
        
        $query = "SELECT * FROM vocab_words
            WHERE vocab_list_id = $vocab_list_id
            ORDER BY name";
        $statement = $db->prepare($query);
        $statement->execute();
        $vocab_words = $statement->fetchAll();
        $statement->closeCursor();
        return $vocab_words;
    }
?>