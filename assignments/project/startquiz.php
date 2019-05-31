<?
session_start();
include("db_connect.php");
$db = get_db();

$vocab_list_id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

include("db/vocab_words.php");
include("db/vocab_lists.php");

$listname = getVocabListName($vocab_list_id);
$_SESSION['vocab_words'] = getVocab_words($vocab_list_id);
$_SESSION['vocab_list']  = getVocabList($vocab_list_id);
$_SESSION['num_wrong'] = 0;
$_SESSION['num_questions'] = 0;
//$_SESSION['word_list'] = getVocabListWords($vocab_list_id);

//header("Location: quiz.php");
?>
