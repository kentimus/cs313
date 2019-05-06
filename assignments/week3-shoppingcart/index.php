<?php
session_start();
if(!isset($_SESSION['cart_count'])){
    $_SESSION['cart_count'] = 0;
}
?>


<?php require("header.php"); ?>

<section class="container-fluid hero" id="hero-homepage">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-4">
                <div class="hero-box">
                    <h2>Because you don't want to share your cheese...</h2>
                    
                    <p class="lead">We sell Stinky Cheese</p>
                    
                    <div class="card-group">
                        <div class="card">
                            <img class="card-img-top" src="images/limburger.jpg" alt="Limburger Cheese">
                            <div class="card-body">
                                <h5 class="card-title">Limburger</h5>
                                <p class="card-text">Washed in brine and covered in bacteria, this cheese smells like a high school locker room. Delicious!</p>
                                
                                
                                
                                <p class='alert alert-success' id="limburger-success">Added to <a href="cart.php">cart</a>!</p> 
                            </div>
                            <div class="card-footer">
                                <p class='price'>$17.95 per pound</p>
                                <select id="limburger-quantity" class='form-control'>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                
                                <a href="#" class='btn btn-primary' id="limburger-add">Add to Cart</a>
                            </div>
                        </div>
                        
                        <div class="card">
                            <img class="card-img-top" src="images/redhawk.jpg" alt="Red Hawk Cheese">
                            <div class="card-body">
                                <h5 class="card-title">Red Hawk</h5>
                                <p class="card-text">Named after a local raptor, this smelly Marin County, California cheese starts off smooth, and ends in pungence.</p>
                                
                                
                                
                                <p class='alert alert-success' id="redhawk-success">Added to <a href="cart.php">cart</a>!</p>
                            </div>
                            <div class="card-footer">
                                <p class='price'>$24.95 per pound</p>
                                <select id="redhawk-quantity" class='form-control'>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                
                                <a href="#" class='btn btn-primary' id="redhawk-add">Add to Cart</a>
                            </div>
                        </div>
                        
                        <div class="card">
                            <img class="card-img-top" src="images/gorgonzola.jpg" alt="Gorgonzola">
                            <div class="card-body">
                                <h5 class="card-title">Gorgonzola</h5>
                                <p class="card-text">Not very stinky, but it is moldy. Close enough, right?</p>
                                
                                
                                
                                <p class='alert alert-success' id="gorgonzola-success">Added to <a href="cart.php">cart</a>!</p>
                            </div>
                            <div class="card-footer">
                                <p class='price'>$19.95 per pound</p>
                                <select id="gorgonzola-quantity" class='form-control'>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                
                                <a href="#" class='btn btn-primary' id="gorgonzola-add">Add to Cart</a>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php require("footer.php"); ?>