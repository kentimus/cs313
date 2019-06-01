<?
    function get_quiz_result_count($user_id){
        global $db;
        $query = "SELECT count(id) as quiz_count
            FROM quiz_results
            WHERE user_id =  :user_id";
        $statement = $db->prepare($query);
        $statement->bindValue(':user_id', $user_id);
        $statement->execute();
        $quiz_count = $statement->fetch();
        $statement->closeCursor();
        return $quiz_count;
    }

    function add_quiz_results($vocab_list_id, $user_id, $score){
        global $db;
        $date = date("Y-m-d");
        $query = "INSERT INTO quiz_results
            (vocab_list_id, user_id, score, date)
            VALUES (:vocab_list_id, :user_id, :score, :date)";
//        $statement = $db->prepare($query);
//        $statement->bindValue(':vocab_list_id',$vocab_list_id);
//        $statement->bindValue(':user_id',$user_id);
//        $statement->bindValue(':score',$score);
//        $statement->bindValue(':date',$date);
//        $statement->execute();
//        $statement->closeCursor();
//        return $db->lastInsertId();
    }
?>