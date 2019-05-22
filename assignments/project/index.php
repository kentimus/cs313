<? 
include("db_connect.php");
$db = get_db();
include("db/vocab_lists.php");
$vocab_lists = getVocab_lists();

?>
<? include("header.php"); ?>

<section class="container-fluid hero" id="hero-homepage">
    <div class="container">
        
        <div class="page-header">
            <h1>Kent's Vocabulary Lists</h1>
            <p>Pick a List!</p>
        </div>
        
        <div class="card-deck">
        <? foreach($vocab_lists as $vl){ ?>
            <div class="card">
                <img class="card-img-top" src="images/thumbs/<?=$vl['id'];?>.jpg" alt="<?=$vl['name'];?>">
                <div class="card-body"><a class="stretched-link" href="vocab_list.php?id=<?=$vl['id'];?>"><?=$vl['name'];?></a></div>
            </div>
        <? } ?>
        </div>
    </div>
</section>

         
         
<? include("footer.php"); ?>