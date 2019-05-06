<?php
session_start();

$address = filter_input(INPUT_POST, 'address');
$city    = filter_input(INPUT_POST, 'city');
$state   = filter_input(INPUT_POST, 'state');
$zip     = filter_input(INPUT_POST, 'zip');

if($address == '' || $city == '' || $state == '' || $zip == ''){ 
    // form not filled out correct, so send back to checkout page
    header('Location: checkout.php?error=display');
} else {

    // order was just placed, so cart count should now be zero
    $_SESSION['cart_count'] = 0;
    
    // add a cart variable, so we have that data for this page.
    // then empty the cart
    $cart = $_SESSION['cart'];
    unset($_SESSION['cart']);
?>

    <?php require("header.php"); ?>
    <section class="container-fluid hero" id="hero-checkout">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-4">
                    <div class="hero-box">
                        <h1>Thank You for Your Order!</h1>

                        <h2>Your Items:</h2>
                        <table class='table'>
                            <thead>
                                <tr>
                                    <th>Cheese</th>
                                    <th class='td-num'>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($cart as $key => $value){ ?>
                                <tr>
                                    <td><?php echo ucfirst($key); ?></td>
                                    <td class='td-num'><?php echo $value; ?></td>
                                </tr>
                            <?php } // end foreach ?>
                            </tbody>
                        </table>
                        
                        <h2>Your Address:</h2>
                        <p><?php echo $address; ?><br>
                        <?php echo "$city, $state $zip"; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require("footer.php");?>

<?php } // end else ?>