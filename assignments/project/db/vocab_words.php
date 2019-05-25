<?
    function getVocab_words($vocab_list_id){
        global $db;
        $query = "SELECT * FROM vocab_words
            WHERE vocab_list_id =  :vocab_list_id";
        $statement = $db->prepare($query);
        $statement->bindValue(':vocab_list_id',$vocab_list_id);
        $statement->execute();
        $vocab_words = $statement->fetchAll();
        $statement->closeCursor();
        return $vocab_words;
    }

    function getVocab_words_for_quiz($vocab_list_id){
        global $db;
        $query = "SELECT * FROM vocab_words
            WHERE vocab_list_id =  :vocab_list_id";
        $statement = $db->prepare($query);
        $statement->bindValue(':vocab_list_id',$vocab_list_id);
        $statement->execute();
        $vocab_words = $statement->fetchAll();
        foreach($vocab_words as $vw)
        $statement->closeCursor();
        return $vocab_words;
    } 
?>