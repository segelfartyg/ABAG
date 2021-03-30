<?php
session_start();
require "dbfunctions.php";


$_SESSION["basecordx"] = $_POST["postnodex"];

$_SESSION["basecordy"] = $_POST["postnodey"]; 


echo "NODE: ";
echo $_SESSION["basecordx"]; 
echo ", "; 
echo $_SESSION["basecordy"];



?>
