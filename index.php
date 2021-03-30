<?php 
session_start();
require "dbfunctions.php";

if(isset($_POST["xcord"]) && isset($_POST["ycord"])){
    $_SESSION["basecordx"] = $_POST["xcord"];
    $_SESSION["basecordy"] = $_POST["ycord"];
    $_SESSION["xcord"] = $_POST["xcord"];
    
    $_SESSION["ycord"] = $_POST["ycord"];


}
else{

    if(isset($_SESSION["xcord"]))
    {

        $_SESSION["basecordx"] = $_SESSION["xcord"];
        $_SESSION["basecordy"] = $_SESSION["ycord"];     
    }
    else{
        $_SESSION["basecordx"] = 1;
        $_SESSION["basecordy"] = 1;
    }

   
   
}

$basecordx = $_SESSION["basecordx"];

$basecordy = $_SESSION["basecordy"];

//TJENA
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="abagcss.css">
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
            <button id="gonode" type="submit">GO</button>

            </form>
        </div>

    <div id="gridcontroller">
    <div id="overlaycontainer">
        
        
        <div id="nodeprops">
                <h3 id="nodeheader">NODE: NO NODE SELECTED</h3>
                <p>Change the properties of the specified node.</p>
                <form id="submitnodeform" method="post" action="addnode.php">

                    <div class="columnform">
                        <div class="forumcol1">
                      
                        <p>Ready Red</p>
                        <input id="radiored" value="linear-gradient(120deg, rgb(255, 0, 0) 0%, rgb(180, 0, 0) 50%, rgb(255, 0, 0) 100%)" type="radio" name="color">
                      
                        <p>Greedy Green</p>
                        <input id="radiogreen" value="linear-gradient(120deg, rgb(0, 116, 6) 0%, rgb(0, 255, 13) 50%, rgb(0, 116, 6) 100%)" type="radio" name="color">
                    
                       
                    
                        <p>Pretty Pink</p>
                        <input id="radiopink" value="linear-gradient(120deg, rgb(175, 0, 131) 0%, rgb(250, 78, 241) 50%, rgb(175, 0, 131) 100%)" type="radio" name="color"> 
                    </div>

                    <div class="forumcol1">
                    <p>Boundless Black</p>
                    <input id="radioblack" value="linear-gradient(120deg, rgb(27, 27, 27) 0%, rgb(70, 70, 70) 50%, rgb(27, 27, 27) 100%)"type="radio" name="color">
                    
                    <p>Whack White</p>
                    <input id="radiowhite" value="linear-gradient(120deg, rgb(133, 133, 133) 0%, rgb(248, 248, 248) 50%, rgb(133, 133, 133) 100%)" type="radio" name="color">

                    <br>
                   
                    <div id="demonode"></div>
                    </div>
          
                    
                    </div>

                    <button class="subtmitnode" type="submit">GO</button>
                    <button onclick="Back()" class="backbutton" >BACK TO GRID</button>
                </form>

                
        </div>

</div>

                <div id="uparrow" onclick="GoDir(<?php echo $_SESSION['basecordx']; echo ', '; echo $_SESSION['basecordy']; echo ', '; echo  '\'up\''  ?>)"><img src="arrow1.svg"class="arrow"></div>
                <div id="midrow">

                    <div id="leftarrow" onclick="GoDir(<?php echo $_SESSION['basecordx']; echo ', '; echo $_SESSION['basecordy']; echo ', '; echo '\'left\''; ?>)"><img src="arrowleft.svg" class="arrow"></div>
                        <div id="maincanvas">

                         <?php
                                            
                            $startx = $basecordx;
                            $starty = $basecordy + 9;

                            $row = 11;
                            $box = 1;


                        for($i = 0; $i < 10; $i++){
                            
                            $startx = $basecordx;
                            $box = 1;
                            $row--;

                            for($j = 0; $j < 10; $j++){
                                echo '<div style="background: ' . CheckNodeC($startx, $starty) . '" '.'class="box '. $startx . ' ' . $starty . ' r' . $row . ' b' . $box . '" ' . 'onclick="VisitNode(' . $startx . ',' . $starty . ')"' . '"></div>';     
                                $startx++;
                                $box++;

                            }
                            $starty--;
                        }
                    ?>

                            </div>
                    <div id="rightarrow" onclick="GoDir(<?php echo $_SESSION['basecordx']; echo ', '; echo $_SESSION['basecordy']; echo ', '; echo '\'right\''; ?>)"><img src="arrowright.svg" class="arrow"></div>

                </div>
            <div id="downarrow" onclick="GoDir(<?php echo $_SESSION['basecordx']; echo ', '; echo $_SESSION['basecordy']; echo ', '; echo '\'down\''; ?>)"><img src="arrowdown.svg" class="arrow"></div>
        </div>

    </div>
</div>
        
        <div class="wavebard">    
        </div>
        <div id="footer">
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="abagjs.js"></script>
    </body>
</html>