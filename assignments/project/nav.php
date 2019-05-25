<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Kent's Vocab Lists</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
      
        <? 
        if(isset($_SESSION['username']) && $_SESSION['username'] !== null){
        ?>
            <li class="nav-item">
                <a class="nav-link" href="profile.php"><?=$_SESSION['username'];?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="log_out.php">Log-out</a>
            </li>  
        <?
        }  else {
        ?>
            <li class="nav-item">
                <a class="nav-link" href="log_in.php">Log-in</a>
            </li>
        <? 
        }
        ?>
    </ul>
    
  </div>
</nav>