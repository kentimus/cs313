<?php
session_start();

// validate inputs
$cheese =   htmlspecialchars(filter_input(INPUT_POST, 'cheese'));
$quantity = htmlspecialchars(filter_input(INPUT_POST, 'quantity', FILTER_VALIDATE_INT));

// if we already have this cheese in the cart, increment quantity
// otherwise, add this cheese to the cart
if(isset($_SESSION['cart'][$cheese])){
    $_SESSION['cart'][$cheese] += $quantity;
} else {
    $_SESSION['cart'][$cheese] = $quantity;
}

// increment cart count
$_SESSION['cart_count'] += $quantity;

// output new cart count. JavaScript will update the nav link
echo $_SESSION['cart_count'];
?>