<?
session_start();
include("db_connect.php");
$db = get_db();

$vocab_list_id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

include("db/vocab_words.php");
include("db/vocab_lists.php");

$listname = getVocabListName($vocab_list_id);
$vocab_words = getVocab_words($vocab_list_id);
$vocab_list = getVocabList($vocab_list_id);


?>
<pre><?=print_r($vocab_list);?></pre>