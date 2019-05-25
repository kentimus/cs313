<?
function verifyUser($username, $password){
    global $db;
    $query = "SELECT * FROM users
        WHERE username =  :username
        AND password = :password";
    $statement = $db->prepare($query);
    $statement->bindValue(':username',$username);
    $statement->bindValue(':password',$password);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();
    if(count($user) > 1){
        return $user;
    } else {
        return false;
    }
}
?>