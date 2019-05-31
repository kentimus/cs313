<?
session_start();
$answer = filter_var($_POST['answer'], FILTER_SANITIZE_STRING);

// remove question from beginning of array
$question = array_shift($_SESSION['vocab_words']);

if($answer == $question['english_word']){
    // answer was correct
    $_SESSION['alert'] = "<div class='alert alert-success'>You got it right!</div>";
} else {
    // answer was not correct
    $foreign_word = $question['word'];
    $english_word = $question['english_word'];
    $_SESSION['alert'] = "<div class='alert alert-warning'>Nope. The correct translation of <em>$foreign_word</em> is <em>$english_word</em></div>";
}
?>

<pre><?=print_r($question);?></pre>

<?=$_SESSION['alert'];?>