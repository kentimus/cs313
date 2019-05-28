<pre><?=print_r($_POST);?></pre>

<? echo "<br><br><br>"; ?>

<?
$params = array();
parse_str($_POST['topics'], $params);
?>

<pre><?=print_r($params);?></pre>