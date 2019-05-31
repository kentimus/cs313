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

    function getVocabListName($id){
        global $db;
        $query = "SELECT name FROM vocab_lists
            WHERE id = :id";
        $statement = $db->prepare($query);
        $statement->bindValue(':id',$id);
        $statement->execute();
        $statement->closeCursor();
        return $row['name'];
    }

    function getVocabList($id){
        global $db;
        $query = "SELECT * FROM vocab_lists
            WHERE id = :id";
        $statement = $db->prepare($query);
        $statement->bindValue(':id',$id);
        $statement->execute();
        $vocab_list = $statement->fetch();
        $statement->closeCursor();
        
        return $vocab_list;
    }

    function getVocabListEnglishWords($id){
        global $db;
        $words = array();
        $query = "SELECT english_word FROM vocab_lists
            WHERE id = :id";
        $statement = $db->prepare($query);
        $statement->bindValue(':id',$id);
        $statement->execute();
//        //$vocab_list = $statement->fetch();
//        while($row = $statement->fetch()){
//            echo $row['english_word'];
//            echo "<br>";
//        }
//        $statement->closeCursor();
        
        //return $vocab_list;
    }
    
?>