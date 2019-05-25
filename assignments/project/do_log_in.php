<? 
session_start();
include("db_connect.php");
$db = get_db();

include('db/users.php');

$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);



$vocab_list_id = $_GET['id'];

?>