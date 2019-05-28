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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                <label><input type="checkbox" name="topics[]" value="<?=$t['name'];?>"> <?=$t['name'];?></label><br>
    
            <? } ?>
            </p>
            <p>
                <input type="submit" value="add scripture">
            </p>
        </form>
    </body>
</html>