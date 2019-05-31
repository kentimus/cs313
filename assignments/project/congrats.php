<?
session_start();
include("db_connect.php");
$db = get_db();

include("header.php");
?>

<section class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Congratulations!</h1>
                
                <p>You got <?=$_SESSION['num_wrong'];?> out of <?=$_SESSION['num_questions'];?></p>
                
                <p><a class="btn btn-primary" href="index.php">Choose another quiz</a></p>
            </div>
        </div>
    </div>
</section>

<? include("footer.php"); ?>
