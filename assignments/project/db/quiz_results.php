<?
    function get_quiz_result_count($user_id){
        global $db;
        $query = "SELECT count(id) as quiz_count
            FROM quiz_results
            WHERE user_id =  :user_id";
        $statement = $db->prepare($query);
        $statement->bindValue(':user_id',$user_id);
        $statement->execute();
        $quiz_count = $statement->fetch();
        $statement->closeCursor();
        return $vocab_words;
    }
?>