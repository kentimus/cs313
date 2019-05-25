<? 
session_start();
include("db_connect.php");
$db = get_db();

include('db/users.php');

$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$email    = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

// add user to database here:


// set session variables here:

$_SESSION['username'] = $username;
$_SESSION['logged_in'] = true;

header("Location: index.php");
?>