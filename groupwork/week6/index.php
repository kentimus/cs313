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
        <link rel="stylesheet" href="week6.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="new_scripture.php" method="post">
                        <p>
                            <label for="book">Book</label>
                            <input class="form-control" type="text" id="book" name="book">
                        </p>
                        <p>
                            <label for="chapter">Chapter</label>
                            <input class="form-control" type="number" id="chapter" name="chapter">
                        </p>
                        <p>
                            <label for="verse">Verse</label>
                            <input class="form-control" type="number" id="verse" name="verse">
                        </p>
                        <p>
                            <label for="content">Content</label>
                            <textarea class="form-control" id="content" name="content"></textarea>
                        </p>
                        <p>
                        <? foreach($topics as $t){ ?>
                            <label><input type="checkbox" name="topics[]" value="<?=$t['id'];?>"> <?=$t['name'];?></label><br>
                        <? } ?>
                        </p>
                        <p>
                            <input class="form-control" type="submit" value="add scripture">
                        </p>
                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>