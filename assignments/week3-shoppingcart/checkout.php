<?php
session_start();
if(!isset($_SESSION['cart_count'])){
    $_SESSION['cart_count'] = 0;
}
?>

<?php require("header.php"); ?>
<section class="container-fluid hero" id="hero-checkout">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-4">
                <div class="hero-box">
                    <h1>Checkout</h1>
                    <?php
                        if(isset($_GET['error']) && $_GET['error'] == 'display'){
                    ?>
                        <div class='alert alert-warning'>
                            <h2>Oh noos!</h2>
                            <p>There was info missing from the form. Try again.</p>
                        </div>
                    <?php } // end if ?>
                    <form method='post' action="thankyou.php">
                        <p>
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" placeholder="ex: 123 Main Str" class='form-control' required>
                        </p>
                        
                        <p>
                            <label for="address">City</label>
                            <input type="text" name="city" id="city" placeholder="ex: CheeseVille" class='form-control' required>
                        </p>
                        
                        <p>
                            <label for="address">State</label>
                            <input type="text" name="state" id="state" placeholder="ex: California" class='form-control' required>
                        </p>
                        
                        <p>
                            <label for="address">Zip</label>
                            <input type="text" name="zip" id="zip" placeholder="ex: 91234" class='form-control' required>
                        </p>
                        
                        <p>
                            <input type="submit" class='btn btn-primary' value="Place Order">
                            <a href="cart.php" class='btn btn-secondary'>Go back to Cart</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require("footer.php");?>