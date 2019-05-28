<?
include("db_connect.php");
$db = get_db();

include("db_functions.php");
$scriptures  = getScriptures();
for($i=0; $i<count($scriptures); $i++){
    //$scriptures[$i]['topics'] = getTopicsForScripture($scriptures[$i]['id']);
}
?>
<!doctype html>
<html>
    <head>
        <title>View Scriptures | Groupwork Week 6</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="week6.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <pre>
                    <?=print_r($scriptures);?>
                    </pre>
                </div>
            </div>
        </div>
    </body>
</html>