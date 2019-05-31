<?
session_start();
include("db_connect.php");
$db = get_db();

$vocab_list_id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

//include("db/vocab_words.php");
//include("db/vocab_lists.php");
//
//$listname = getVocabListName($vocab_list_id);
//$vocab_words = getVocab_words($vocab_list_id);

$current_question = $_SESSION['vocab_words'][0];

$wordlist = $_SESSION['word_list'];

// get correct answer
$answers[0] = $_SESSION['vocab_words'][0]['english_word']; 

// get two wrong answers from the word list
do {
    shuffle($_SESSION['word_list']);
    $answers[1] = $_SESSION['word_list'][1];
    $answers[2] = $_SESSION['word_list'][2];
} while ($answers[1] == $answers[0] || $answers[2] == $answers[0]);

// randomize answers
shuffle($answers);

if(!isset($_SESSION['logged_in'])){
    $login_alert = true;
}


include("header.php");
?>

<section class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <h1><?=$_SESSION['vocab_list']['name'];?>Quiz</h1>
                
                <p>You have <?=count($_SESSION['vocab_words']);?> questions left.</p>
                
                <? if(isset($_SESSION['alert'])){
                    echo $_SESSION['alert'];
                    $_SESSION['alert'] = null;
                } ?>
                
                <p>Translate:</p>
                <p class="question"><?=$current_question['word'];?></p>
                
                
                <form action="checkanswer.php" method="post">
                    <input class="btn btn-secondary" type="submit" name="answer" value="<?=$answers[0];?>">
                    <input class="btn btn-secondary" type="submit" name="answer" value="<?=$answers[1];?>">
                    <input class="btn btn-secondary" type="submit" name="answer" value="<?=$answers[2];?>">
                </form>    
            </div>
        </div>
    </div>
</section>


<? include("footer.php"); ?>
