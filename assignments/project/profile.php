<? 
session_start();
include("db_connect.php");
$db = get_db();

include("db/quiz_results.php");
$quiz_count = get_quiz_result_count($_SESSION['user']['id']);

?>
<? include("header.php"); ?>
<section class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Your Profile</h1>
                
                <p>Username : <?=$_SESSION['user']['username'];?></p>
                <p>Email : <?=$_SESSION['user']['email'];?></p>
                <? if($quiz_count['quiz_count'] == 0){ ?>
                <div class="alert alert-info">
                    <p class="alert alert-info"><strong>You haven't taken a quiz yet!</strong> You can fix that by going to the <a href="index.php">home page</a>, selecting a vocab list, and then clicking the quiz button.</p>
                </div>
                <? } else { ?>
                <p>Yeah! You have taken <?=$quiz_count['quiz_count']; ?> quizzes!</p>
                <? } ?>
            </div>
        </div>
    </div>
</section>


<? include("footer.php"); ?>