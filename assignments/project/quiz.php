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

// get correct answer
$answers[0] = $_SESSION['vocab_words'][0]['english_word']; 

// get two wrong answers from the word list
do {
  $answers[1] = $_SESSION['word_list'][rand(0,(count($_SESSION['word_list'])-1)];
} while ($answers[1] == $answers[0]);
do {
  $answers[2] = $_SESSION['word_list'][rand(0,count($_SESSION['word_list']))];
} while ($answers[2] == $answers[1] || $answers[2] == $answers[0]);


include("header.php");
?>

<section class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <h1><?=$_SESSION['vocab_list']['name'];?>Quiz</h1>
                
                <pre><?=print_r($answers);?></pre>
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
