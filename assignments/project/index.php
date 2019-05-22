<? 
include("db_connect.php");
$db = get_db();
include("db/vocab_lists.php");
$vocab_lists = getVocab_lists();

?>
<? include("header.php"); ?>

<div class="container">
    <div class="">
    <? foreach($vocab_lists as $vl){ ?>
        <div class="card">
            <a href="list.php?id=<?=$vl['id'];?>"><?=$vl['name'];?></a>
        </div>
    <? } ?>
    </div>
</div>

         
         
<? include("footer.php"); ?>