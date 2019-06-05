<?
    function add_user($username, $password){
        global $db;
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users
            (username, password)
            VALUES (:username, :password)";
        $statement = $db->prepare($query);
        $statement->bindValue(':username',$username);
        $statement->bindValue(':password',$password_hash);
        $statement->execute();
        $statement->closeCursor();
        return $db->lastInsertId();
    }
?>