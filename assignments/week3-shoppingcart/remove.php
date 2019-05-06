<?php
session_start();

$cheese = filter_input(INPUT_GET, 'cheese');


if(isset($_SESSION['cart'][$cheese])){
    $remove_quantity = $_SESSION['cart'][$cheese];
    unset($_SESSION['cart'][$cheese]);

    // maybe it would be better to loop through cart to get
    // quantity, but just minusing to get new total
    $_SESSION['cart_count'] -= $remove_quantity;
}
   
header('Location: cart.php');

?>