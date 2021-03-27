<?php 
require "dbfunctions.php";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="abagcss.css
        ">
    </head>
    <body>
        <header>
            <div class="navitem"><img src="abagsvglogo.svg" class="headerimg"></div>

                <!-- <div class="navitem"><p>ABAG - JOIN THE GRID</p></div>

                <div class="navitem"><p>YOUR NODES</p></div> -->
        </header>
        <div class="wavebar">
        </div>
        <div id="container">
            <!-- <div class="enroll"><p>JOIN ABAG. ENROLL NOW.</p></div> -->
<div id="vcontainer">

    <div id="adressfield">

        <form id="adressform" method="POST" action="index.php">
            <div class="adfield">
            <label for="xcord">X-ADRESS:</label>
            <input name="xcord" type="number"><br>
            </diV>

            <div class="adfield">
            <label for="ycord">Y-ADRESS:</label>
            <input name="ycord" type="number"><br>
            </div>
            <button type="submit">GO</button>

        </form>
    </div>

            <div id="gridcontroller">

                <div id="uparrow"><img src="arrow1.svg"class="arrow"></div>
                <div id="midrow">

                    <div id="leftarrow"><img src="arrowleft.svg" class="arrow"></div>
                    <div id="maincanvas">




                    <?php

                        //AddNode(24, 54, 4);
                       

                        
                            if(isset($_POST["xcord"]) && isset($_POST["ycord"])){
                                $basecordx = $_POST["xcord"];
                                $basecordy = $_POST["ycord"]; 
                            }
                            else{
                                $basecordx = 1;
                                $basecordy = 1; 
                            }

                            

                            
                            $startx = $basecordx;
                            $starty = $basecordy + 9;

                            $row = 11;
                            $box = 1;


                        for($i = 0; $i < 10; $i++){
                            
                            $startx = $basecordx;
                            $box = 1;
                            $row--;

                            for($j = 0; $j < 10; $j++){
                                echo '<div class="box '.$startx.' '.$starty.''.' r'.$row.' b'.$box.' '.CheckNodeC($startx, $starty).'"></div>';     
                                $startx++;
                                $box++;

                            }
                            $starty--;
                        }
                    ?>

                    </div>
                    <div id="rightarrow"><img src="arrowright.svg" class="arrow"></div>

                </div>
                <div id="downarrow"><img src="arrowdown.svg" class="arrow"></div>
            </div>
        </div>
        </div>
        <div class="wavebard">    
        </div>
        <div class="footer">
        </div>
        <script src="" async defer></script>
    </body>
</html>