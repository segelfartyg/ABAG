<?php
session_start();




$_SESSION["basecordx"] = $_POST["xcord"];

$_SESSION["basecordy"] = $_POST["ycord"]; 

echo $_SESSION["basecordx"];

header("Location: index.php");
?>
