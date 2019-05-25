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
                <h1><?=$listname;?> Quiz</h1>
                
                <p>(doesn't work yet)</p>
                
                <p>Translate:</p>
                <p class="question"><?=$vocab_words[0]['word'];?></p>
                
                <p>
                    <a href="" class="btn btn-secondary"><?=$vocab_words[0]['english_word'];?></a>
                    <a href="" class="btn btn-secondary"><?=$vocab_words[1]['english_word'];?></a>
                    <a href="" class="btn btn-secondary"><?=$vocab_words[2]['english_word'];?></a>
                </p>
            </div>
        </div>
    </div>
</section>


<? include("footer.php"); ?>
