<?
session_start();
include("db_connect.php");
$db = get_db();

include("header.php");

$num_right = $_SESSION['num_questions'] - $_SESSION['num_wrong'];
$percent_right = ($num_right / $_SESSION['num_questions']) * 100;
?>

<section class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Congratulations!</h1>
                
                <pre><?=print_r($_SESSION);?></pre>
                
                <p>You got <?=$num_right;?> out of <?=$_SESSION['num_questions'];?> questions correct!</p>
                
                <p>(That's <?=round($percent_right,2);?>%!)</p>
                
                <p><a class="btn btn-primary" href="index.php">Choose another quiz</a></p>
            </div>
        </div>
    </div>
</section>

<? include("footer.php"); ?>
