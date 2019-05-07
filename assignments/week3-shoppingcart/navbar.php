<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <a class="navbar-brand" href="index.php">Kent's Stinky Cheese Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Browse Stinky Cheeses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cart.php">View Cart (<span id="cart-count"><?php echo $_SESSION['cart_count']; ?></span>)</a>
            </li>
        </ul>
    </div>
</nav>