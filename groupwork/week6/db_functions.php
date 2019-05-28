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
?>