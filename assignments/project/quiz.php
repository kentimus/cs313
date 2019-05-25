<?
session_start();
include();
include("db_connect.php");
$db = get_db();

$vocab_list_id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

include("db/vocab_words.php");
include("db/vocab_lists.php");

$listname = getVocabListName($vocab_list_id);
$vocab_words = getVocab_words($vocab_list_id);


include("header.php");
?>

<section class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                
            </div>
        </div>
    </div>
</section>


<? include("footer.php"); ?>
