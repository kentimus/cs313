<?
session_start();
include("db_connect.php");
$db = get_db();


$user['email'] = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$user['id'] = $_SESSION['user']['id'];

include("db/users.php");
update_email($user);

//echo "Email : " . $user['email'];
echo $db->last_query();
?>