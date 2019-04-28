<?php include("header.php"); ?>

<section class="container-fluid hero" id="hero-homepage">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="hello-box">
                    <h1>Hi, I'm Kent.</h1>
                    <p class="lead">I make web sites.</p> 
                    
                    <p>I made this one for my CS 313 homework.</p>
                    
                    <p>
                        <a href="assignments.php" class="btn btn-primary">See my assignments</a>
                        <a href="#about-me" class='btn btn-secondary'>Read more about me</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid container-green" id="about-me">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <figure>
                    <img src="images/kent_and_sons.jpg" class="img-fluid" alt="Kent and his three sons">
                    <figcaption>Me and my three sons.</figcaption>
                </figure>
                
            </div>
            <div class="col-md-6">
                <h2>About Me</h2>
                
                <p>I'm a dad, husband, web developer, and a language nerd.</p>
                
                <p>I also love using semi-colons; I'm really good at it.</p>
                
                <h3>Some of my skills:</h3>
                
                <ul>
                    <li>HTML</li>
                    <li>CSS / Sass / Bootstrap</li>
                    <li>JavaScript / Jquery</li>
                    <li>PHP / CodeIgniter</li>
                    <li>MySQL</li>
                </ul>
                
                <h3>Some more skills</h3>
                
                <p>I also have <a href="#" id="skills-link">these skills</a>.</p>
            </div>
        </div>
        
        <div id="skills">
            <h3>My other skills:</h3>
            <ul>
                <li>Nunchuck Skills</li>
                <li>Bo Hunting Skills</li>
                <li>Computer Hacking Skills</li>
                <li>Skills!</li>
            </ul>
            
            
            <a href="#" class="btn btn-primary" id="skill-remove-link">Close</a>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>