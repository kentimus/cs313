<? 
session_start();
include("db_connect.php");
$db = get_db();

$vocab_list_id = $_GET['id'];

include("db/vocab_words.php");
include("db/vocab_lists.php");

$listname = getVocabListName($vocab_list_id);
$vocab_words = getVocab_words($vocab_list_id);


?>
<? include("header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?=$listname;?></h1>
            
            <? foreach($vocab_words as $vw){ ?> 
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flippable appcon ac-bicycle">
                        <div class="front">
                            <?=$vw['word'];?>
                        </div>
                        <div class="back">
                            <?=$vw['english_word'];?>
                        </div>
                    </div>
                </div>
            <? } ?>
            
        </div>
    </div>
</div>

<? include("footer.php"); ?>