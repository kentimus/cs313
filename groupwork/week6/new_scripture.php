<?
include("db_connect.php");
$db = get_db();

include("db_functions.php");

$data['book']    = filter_var($_POST['book'], FILTER_SANITIZE_STRING);
$data['chapter'] = filter_var($_POST['chapter'], FILTER_SANITIZE_STRING);
$data['verse']   = filter_var($_POST['verse'], FILTER_SANITIZE_STRING);
$data['content'] = filter_var($_POST['content'], FILTER_SANITIZE_STRING);

$scripture_id = addScripture($data);
echo $scripture_id;
?>