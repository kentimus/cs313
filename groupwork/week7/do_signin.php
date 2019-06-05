<?
session_start();
include("db_connect.php");
$db = get_db();

include("db_functions.php");

$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

$user = get_user($username);

if(password_verify($password, $user['password'])) {
    echo "password is correct";
} else {
    echo "password is incorrect";
}
?>
<pre><?=print_r($user);?></pre>