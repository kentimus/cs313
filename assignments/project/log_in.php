<? 
session_start();
include("db_connect.php");
$db = get_db();

if(isset($_GET['error']) && $_GET['error'] == 'true'){
    $error = true;
} else {
    $error = false;
}
?>
<? include('header.php'); ?>

<section class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Log In</h1>
            </div>
            <? if(isset($_SESSION['username']) && $_SESSION['username'] !== null){ ?>
            <div class="col-md-12">
                <div class="alert alert-warning">
                    <p><strong>Oh noes!</strong> You are already logged in. What are you even doing on this page?</p>
                </div>
            </div>
            <? } else { ?>
            <div class="col-md-6">
                <h2>Existing User Sign Up</h2>
                <? if($error){ ?>
                <div class="alert alert-warning">
                    <p><strong>Oh noes!</strong> Your username and password didn't work. Try again!</p>
                </div>
                <? } ?>
                <form action="do_log_in.php" method="post">
                    <p>
                        <label for="form-username">Username</label>
                        <input type="text" class="form-control" id="form-username" name="username" placeholder="type 'kent'">
                    </p>
                    <p>
                        <label for="form-password">Password</label>
                        <input type="password" class="form-control" id="form-password" name="password" placeholder="type 'kent'">
                    </p>
                    <p>
                        <input type="submit" class="btn btn-primary" value="log in">
                    </p>
                </form>
            </div>
            <div class="col-md-6">
                <h2>New User Sign Up</h2>
                <form action="do_sign_up.php" method="post">
                    <p>
                        <label for="signupform-username">Username</label>
                        <input type="text" class="form-control" id="signupform-username" name="username">
                    </p>
                    <p>
                        <label for="signupform-email">Email</label>
                        <input type="text" class="form-control" id="signupform-email" name="email">
                    </p>
                    <p>
                        <label for="signupform-password">Password</label>
                        <input type="password" class="form-control" id="signupform-password" name="password">
                    </p>
                    <p>
                        <input type="submit" class="btn btn-primary" value="sign up">
                    </p>
                </form>
            </div>
            <? } ?>
        </div>
    </div>
</section>

<? include('footer.php'); ?>