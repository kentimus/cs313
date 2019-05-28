<?
include("db_connect.php");
$db = get_db();

include("db_functions.php");
$topics = getTopics();
?>
<!doctype html>
<html>
    <head>
        <title>Groupwork Week 6</title>
    </head>
    <body>
        <form action="new_scripture.php" method="post">
            <p>
                <label for="book">Book</label>
                <input type="text" id="book" name="book">
            </p>
            <p>
                <label for="chapter">Chapter</label>
                <input type="number" id="chapter" name="chapter">
            </p>
            <p>
                <label for="verse">Verse</label>
                <input type="number" id="verse" name="verse">
            </p>
            <p>
                <label for="content">Content</label>
                <textarea id="content" name="content"></textarea>
            </p>
            <p>
            <? foreach($topics as $t){ ?>
                <label><?=$t['name'];?> <input type="checkbox" name="topics[]" value="<?=$t['name'];?>"></label><br>
    
            <? } ?>
            </p>
        </form>
    </body>
</html>

Book

Chapter

Verse

Content (The text of the scripture. A textarea would probably be the best choice here).