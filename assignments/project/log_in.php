<? 
include("db_connect.php");
$db = get_db();
?>
<? include('header.php'); ?>

<section class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Log In</h1>
            </div>
            <div class="col-md-6 offset-md-3">
                <form action="do_log_in.php" method="post">
                    <p>
                        <label for="form-username">Username</label>
                        <input type="text" class="form-control" id="form-username" name="username" placeholder="type 'kent'">
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<? include('footer.php'); ?>