<? 
session_start();
$_SESSION['username']  = null;
$_SESSION['logged_in'] = false;
$_SESSION['userid']    = null;
header("Location: index.php");
?>