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

$correct_answer = $_SESSION['vocab_words'][0]['english_word'];

// get two wrong answers from the word list
$wrong1 = "";
$wrong2 = "";

do {
  $wrong1 = $_SESSION['word_list'][rand(0,count($_SESSION['word_list']))];
} while ($wrong1 == $correct_answer);


include("header.php");
?>

<section class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <h1><?=$_SESSION['vocab_list']['name'];?>Quiz</h1>
                
                <p><?=$wrong1;?></p>
                <p><?=count($_SESSION['vocab_words']);?></p>
                
                <p>Translate:</p>
                <p class="question"><?=$current_question['word'];?></p>
                
                <p>
                    <a href="" class="btn btn-secondary"><?=$_SESSION['vocab_words'][0]['english_word'];?></a>
                    <a href="" class="btn btn-secondary"><?=$_SESSION['vocab_words'][1]['english_word'];?></a>
                    <a href="" class="btn btn-secondary"><?=$_SESSION['vocab_words'][2]['english_word'];?></a>
                </p>
            </div>
        </div>
    </div>
</section>


<? include("footer.php"); ?>
