<?php
session_start();
if(!isset($_SESSION['cart_count'])){
    $_SESSION['cart_count'] = 0;
}

$prices['limburger']  = 17.95;
$prices['redhawk']    = 24.95;
$prices['gorgonzola'] = 19.95;

$grand_total = 0;
?>

<?php require("header.php"); ?>

<section class="container-fluid hero" id="hero-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-4">
                <div class="hero-box">
                    <h1>Your Cart</h1>
                    
                    <?php if(!isset($_SESSION['cart']) || $_SESSION['cart_count'] == 0){ ?>
                    <div class="alert alert-warning">
                        <h2>Oh noos!</h2>
                        
                        <p><strong>Your cart is empty.</strong> You can fix that by adding cheese on <a href="index.php">this page</a>.</p>
                    </div>
                    <?php }  else { ?>
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Cheese</th>
                                <th class='td-num'>Price Each</th>
                                <th class='td-num'>Quantity</th>
                                <th class='td-num'>Price</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($_SESSION['cart'] as $key => $value){ 
                            $row_price = $prices[$key] * $value; 
                            $grand_total += $row_price;
                        ?>
                            <tr>
                                <td><?php echo ucfirst($key); ?></td>
                                <td class='td-num'>$<?php echo number_format($prices[$key],2); ?></td>
                                <td class='td-num'><?php echo $value; ?></td>
                                <td class='td-num'>$<?php echo number_format($row_price,2); ?></td>
                                <td><a href="remove.php?cheese=<?php echo $key;?>" class='btn btn-secondary'>Remove</a></td>
                            </tr>
                        <?php } ?>
                            <tr>
                                <td colspan="3"><strong>Total</strong></td>
                                <td class='td-num'><strong>$<?php echo number_format($grand_total,2); ?></strong></td>
                                <td>
                                    <p><a href="checkout.php" class='btn btn-primary'>Check out</a></p>
                                    <p><a href="index.php" class='btn btn-secondary'>Continue Shopping</a></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <?php } // end else ?>
                </div>
                
                
            </div>
        </div>
    </div>
</section>

<?php require("footer.php"); ?>