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
    echo "$user<br><br>";
    echo count($user);
    return true;
}
?>