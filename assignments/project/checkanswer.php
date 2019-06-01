<?
session_start();
$answer = filter_var($_POST['answer'], FILTER_SANITIZE_STRING);

// increment number of questions
$_SESSION['num_questions']++;

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
    
    // add question back to end of the array
    array_push($_SESSION['vocab_words'], $question);
    
    // increment number of wrong questions
    $_SESSION['num_wrong']++;
}

if(count($_SESSION['vocab_words']) == 0){
    // quiz is over, save results to the database
    include("db_connect.php");
    $db = get_db();
    include("db/quiz_results.php");
    
    $num_right = $_SESSION['num_questions'] - $_SESSION['num_wrong'];
    $percent_right = ($num_right / $_SESSION['num_questions']) * 100;
    $score = round($percent_right,2);
    
    add_quiz_results($_SESSION['vocab_list']['id'], $_SESSION['user']['id'], $score);
    echo "<pre>";
    echo print_r($_SESSION);
    echo "</pre>";
    
    
    // unset alert
    $_SESSION['alert'] = null;
    
    //send to congrats page
    //header("Location: congrats.php");
} else {
    // quiz is not over, send back to a question page.
    header("Location: quiz.php");
}

?>


