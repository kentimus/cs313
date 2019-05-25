<? 
session_start();
include("db_connect.php");
$db = get_db();

include('db/users.php');

$user['username'] = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$user['email']    = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$user['password'] = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

addUser($user);

$_SESSION['username']  = $user['username'];
$_SESSION['user']      = $user;
$_SESSION['logged_in'] = true;

header("Location: index.php");
?>