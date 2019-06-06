<? 
session_start();
include("db_connect.php");
$db = get_db();

$password_hash = password_hash('kent', PASSWORD_DEFAULT);
        $query = "UPDATE users
            SET password = :password
            WHERE id = 1";
           
        $statement = $db->prepare($query);
        $statement->bindValue(':password',$password_hash);
        $statement->execute();
        $statement->closeCursor();
?>