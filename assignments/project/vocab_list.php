<? 
session_start();
include("db_connect.php");
$db = get_db();

$vocab_list_id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

include("db/vocab_words.php");
include("db/vocab_lists.php");

$listname = getVocabListName($vocab_list_id);
$vocab_words = getVocab_words($vocab_list_id);
?>
<? include("header.php"); ?>
<section class="container-fluid" id="hero-<?=$vocab_list_id;?>">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <div class="page-header">
                <h1><?=$listname;?></h1>

                <p>Click on a card to see it's translation.</p>

                <p>When you are ready to quiz yourself, click <a class="btn btn-primary" href="startquiz.php?id=<?=$vocab_list_id;?>">quiz me!</a></p>
            </div>
            
            <? foreach($vocab_words as $vw){ ?> 
                <div class="flip-container">
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
</section>

<? include("footer.php"); ?>