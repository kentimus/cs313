<? 
include("db_connect.php");
$db = get_db();
include("db/vocab_lists.php");
$vocab_lists = getVocab_lists();

?>
<? include("header.php"); ?>

<section class="container-fluid hero" id="hero-homepage">
    <div class="container">
        <div class="card-deck">
        <? foreach($vocab_lists as $vl){ ?>
            <div class="card">
                <div class="card-header"><img class="card-img-top" src="images/thumbs/<?=$vl['id'];?>.jpg" alt="<?=$vl['name'];?>"></div>
                <div class="card-body"><a href="vocab_list.php?id=<?=$vl['id'];?>"><?=$vl['name'];?></a></div>
            </div>
        <? } ?>
        </div>
    </div>
</section>

         
         
<? include("footer.php"); ?>