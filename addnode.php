<?php
require "dbfunctions.php";
session_start();


if(NodeExist($_SESSION["basecordx"], $_SESSION["basecordy"])){
    ChangeNode($_SESSION["basecordx"], $_SESSION["basecordy"], $_POST["color"]);
   
}
else{
    AddNode($_SESSION["basecordx"], $_SESSION["basecordy"], $_POST["color"]);
}


header("Location: index.php");
?>