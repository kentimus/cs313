<?
session_start();
include("db_connect.php");
$db = get_db();

include("db_functions.php");

$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

$user = get_user($username);

if(password_verify($password, $user['password'])) {
    $_SESSION['user'] = $user;
    $_SESSION['logged_in'] = true;
    header("Location: index.php");
} else {
    $_SESSION['alert'] = "<div class='alert alert-warning'>Oh no! Your username and password didn't match.</div>";
}
?>
<pre><?=print_r($user);?></pre>