<? 
session_start();
include("db_connect.php");
$db = get_db();

include("db/quiz_results.php");
$quiz_count = get_quiz_result_count($_SESSION['user']['id']);

$quiz_history = get_quiz_history($_SESSION['user']['id']);

?>
<? include("header.php"); ?>
<section class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Your Profile</h1>
            </div>
        </div>
        <div class="row">
            <? if(isset($_SESSION['user'])){ ?>
            <div class="col-md-6">
                <p>Username : <?=$_SESSION['user']['username'];?></p>
                <p>Email : <?=$_SESSION['user']['email'];?></p>
                <? if($quiz_count['quiz_count'] == 0){ ?>
                <div class="alert alert-info">
                    <p><strong>You haven't taken a quiz yet!</strong> You can fix that by going to the <a href="index.php">home page</a>, selecting a vocab list, and then clicking the quiz button.</p>
                </div>
                <? } else { ?>
                <p>Yeah! You have taken <?=$quiz_count['quiz_count']; ?> quizzes!</p>
                
                <h2>Quiz History</h2>
                <table class="table">
                <? 
                    $quizname = "";        
                    foreach($quiz_history as $qh){ 
                        if($qh['name'] != $quizname){
                            $quizname = $qh['name'];
                            echo "<tr><td colspan='2'>$quizname</td></tr>";
                        }    
                ?>
                    <tr>
                        <td><?=$qh['date'];?></td>
                        <td><?=$qh['score'];?></td>
                    </tr>
                <? } // end foreach ?>
                </table>
                
                
                <? } //end else?>
            </div>  
                
            
            
            <? } else { // $_SESSION['user'] is not set ?>
            <div class="col-md-12">
                <div class="alert alert-warning">
                    <p><strong>You aren't logged in!</strong> You can't look at your profile page if you aren't logged in. You can fix that by going to the <a href="log_in.php">log in page</a>.</p>
                </div>
            </div>
                <? } ?>
            </div>
        </div>

</section>


<? include("footer.php"); ?>