<?
session_start();
include("db_connect.php");
$db = get_db();

include("db_functions.php");

$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

add_user($username, $password);

header("Location: signin.php");
die();
?>