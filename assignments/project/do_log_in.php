<? 
session_start();
include("db_connect.php");
$db = get_db();

include('db/users.php');

$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);


//if(verifyUser($username, $password)){
//    $_SESSION['username'] = $username;
//    $_SESSION['logged_in'] = true;
//} else {
//    $_SESSION['username'] = null;
//    $_SESSION['logged_in'] = false;
//}

$user = verifyUser($username, $password);
//echo "<pre>";
//echo print_r($user);
//echo "</pre>";



//echo "<p>" . $_SESSION['username'] . "</p>";

?>