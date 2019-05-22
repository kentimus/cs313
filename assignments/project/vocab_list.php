<? 
include("db_connect.php");
$db = get_db();

$vocab_list_id = $_GET['id'];

include("db/vocab_words.php");
include("db/vocab_lists.php");

//$listname = getVocabListName($vocab_list_id);
$vocab_words = getVocab_words($vocab_list_id);


?>
<? include("header.php"); ?>



<? include("footer.php"); ?>