<?
session_start();
include("db_connect.php");
$db = get_db();

echo $_SESSION['user']['id'];
$user['email'] = filter_var($_POST['email'], FILTER_SANITIZE_STRING);

echo "<br>";
echo $user['email'];
?>