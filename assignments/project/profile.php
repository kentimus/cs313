<? 
session_start();
include("db_connect.php");
$db = get_db();

include("db/quiz_results.php");
$quiz_count = get_quiz_result_count($_SESSION['user']['id']);

$quiz_history = get_quiz_history($_SESSION['user']['id']);

?>
<? include("header.php"); ?>
<section class="container-fluid" id="hero-homepage">
    <div class="container">
        <div class="row page-header">
            <div class="col-md-12">
                <h1>Your Profile</h1>
            </div>
        </div>
        <? 
        if(isset($_SESSION['user'])){ 
            include("profile_logged_in.php");
        } else {
            include("profile_not_logged_in.php");
        }
        ?>
    </div>
</section>


<? include("footer.php"); ?>