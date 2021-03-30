
   
      
   
    
   
      $("input:radio").on('click', function() {
   
   
         var id= $(this).attr("id");
         
         switch(id){
   
            case "radioblack":
               var demobox = document.getElementById("demonode");
               demobox.style.background = "linear-gradient(120deg, rgb(27, 27, 27) 0%, rgb(70, 70, 70) 50%, rgb(27, 27, 27) 100%)";
               break;
   
            case "radiored":
               var demobox = document.getElementById("demonode");
               demobox.style.background = "linear-gradient(120deg, rgb(255, 0, 0) 0%, rgb(180, 0, 0) 50%, rgb(255, 0, 0) 100%)";
               break;
            case "radiogreen":
               var demobox = document.getElementById("demonode");
               demobox.style.background = "linear-gradient(120deg, rgb(0, 116, 6) 0%, rgb(0, 255, 13) 50%, rgb(0, 116, 6) 100%)";
               break;
   
            case "radiopink":
               var demobox = document.getElementById("demonode");
               demobox.style.background = "linear-gradient(120deg, rgb(175, 0, 131) 0%, rgb(250, 78, 241) 50%, rgb(175, 0, 131) 100%)";
               break;
            case "radioblack":
               var demobox = document.getElementById("demonode");
               demobox.style.background = "linear-gradient(120deg, rgb(27, 27, 27) 0%, rgb(70, 70, 70) 50%, rgb(27, 27, 27) 100%)";
               break;
   
            case "radiowhite":
               var demobox = document.getElementById("demonode");
               demobox.style.background = "linear-gradient(120deg, rgb(133, 133, 133) 0%, rgb(248, 248, 248) 50%, rgb(133, 133, 133) 100%)";
               break;
         
            default:
            break;

         }
      });
      
   
   
   
    


function GoDir(x, y, dir){

   console.log("djdjjda");
   var xcord = x;
   var ycord = y;
   
   switch(dir){
   
   case "up":
      xcord  = x;
      ycord  = y + 1;
   break;
   case "right":
      xcord  = x + 1;
      ycord  = y;
   break;
   case "left":
      xcord  = x - 1;
      ycord  = y;
   break;
   case "down":
      xcord  = x;
      ycord  = y - 1;
   break;
   default:
   break;
   
   }
      
   
   $.ajax({
   
      url: "index.php",
      type: "post",
      
      data: {"xcord" : xcord, "ycord" : ycord},
      success: function(response){
      
         $("body").html(response);
  
      }
   });
   }
   
   
   
   function VisitNode(nodex, nodey){
   
   
      console.log("aheyhwae");
   
      var postnodex = nodex;
      var postnodey = nodey;
      
     
   $.ajax({
   
      url: "shownodeinfo.php",
      type: "post",
      
      data: {"postnodex" : postnodex, "postnodey" : postnodey},
      success: function(messages){
      
              $( "#nodeheader" ).html( messages );
            
            
      }
   
   
   
   });
   var overlay = document.getElementById("overlaycontainer");
  
   
   overlay.style.display = "block";
   overlay.style.animation = "nodefade 0.1s forwards"; 
   
   }
   
   
   function Back(){
   
      var overlay = document.getElementById("overlaycontainer");
      overlay.style.animation = "nodefadeback 0.1s forwards"; 
      
      
      setTimeout(() => {
         overlay.style.display = "none";   
      }, 100);
      
   
   }





   // var nodemenuheader = document.getElementById("nodeheader");


// function sendnodeinfo(x, y){

// overlay.style.display = "block";
// overlay.style.animation = "nodefade 0.1s forwards"; 
// //nodemenuheader.innerHTML = "NODE: " + x + ", " + y;

// }

// function NodeProps(x, y){

//     currentnode = [x, y];
    
//     console.log(currentnode);
// }