<?
include("db_connect.php");
$db = get_db();

include("db_functions.php");

$data['book']    = filter_var($_POST['book'], FILTER_SANITIZE_STRING);
$data['chapter'] = filter_var($_POST['chapter'], FILTER_SANITIZE_STRING);
$data['verse']   = filter_var($_POST['verse'], FILTER_SANITIZE_STRING);
$data['content'] = filter_var($_POST['content'], FILTER_SANITIZE_STRING);
$topics  = $_POST['topics'];

$scripture_id = addScripture($data);
//echo "<p>scripture id = $scripture_id </p>";
echo "<pre>";
echo print_r($topics);
echo "</pre>";
?>