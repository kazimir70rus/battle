<?php

$msg2="";

session_start();
if(!isset($_SESSION["user"])) {
	header("Location: index.php");
	exit();
}else{
	$msg2=$_SESSION["user"];
}
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Wellcom</title>
</head>
<body>
<?php include_once("template/t1.php");?>

<h2>Wellcom, <?php echo ucwords($msg2)?>!</h2>

<div><a href="exit.php">Выход</a></div>
<h2><?php echo $msg?></h2>
</body>
</html>


