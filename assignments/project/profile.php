<? 
session_start();
include("db_connect.php");
$db = get_db();

include("db/quiz_results");
$quiz_count = get_quiz_result_count(1);
//$quiz_count['quiz_count'] = 2;
?>
<? include("header.php"); ?>
<section class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Your Profile</h1>
                <?=$quiz_count['quiz_count']; ?>
            </div>
        </div>
    </div>
</section>


<? include("footer.php"); ?>