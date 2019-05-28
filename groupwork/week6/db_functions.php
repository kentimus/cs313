<?
function getTopics(){
    global $db;
    $query = "SELECT * FROM topics
        ORDER BY name";
    $statement = $db->prepare($query);
    $statement->execute();
    $topics = $statement->fetchAll();
    $statement->closeCursor();
    return $topics;
}

function addScripture($data){
    global $db;
    $query = "INSERT INTO scriptures
        (book, chapter, verse, content)
        VALUES (:book, :chapter, :verse, :content)";
    $statement = $db->prepare($query);
    $statement->bindValue(':book',$data['book']);
    $statement->bindValue(':chapter',$data['chapter']);
    $statement->bindValue(':verse',$data['verse']);
    $statement->bindValue(':content',$data['content']);
    $statement->execute();
    $statement->closeCursor();
    return $db->lastInsertId();
}

function addScriptureTopic($scripture_id, $topid_id){
    global $db;
    $query = "INSERT INTO scriptures_topics
        (scripture_id, topic_id)
        VALUES (:scripture_id, :topic_id)";
    $statement = $db->prepare($query);
    $statement->bindValue(':scripture_id',$scripture_id);
    $statement->bindValue(':topic_id',$topic_id);
    $statement->execute();
    $statement->closeCursor();
    return $db->lastInsertId();
}
?>