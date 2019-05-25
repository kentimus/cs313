<? 
session_start();
include("db_connect.php");
$db = get_db();

include('db/users.php');

$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);


if($user = verifyUser($username, $password)){
    $_SESSION['username']  = $username;
    $_SESSION['user']      = $user;
    $_SESSION['logged_in'] = true;
    header("Location: index.php");
} else {
    $_SESSION['username']  = null;
    $_SESSION['user']      = null;
    $_SESSION['logged_in'] = false;
    header("Location: log_in.php?error=true");
}



?>