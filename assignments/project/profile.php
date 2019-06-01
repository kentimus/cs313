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
                <? 
                if(isset($_SESSION['user'])){ 
                    includ("profile_logged_in.php");
                } else {
                    include("profile_not_logged_in.php");
                }
                ?>
            </div>
        </div>
    </div>
</section>


<? include("footer.php"); ?>