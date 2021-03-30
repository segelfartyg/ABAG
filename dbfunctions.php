<?php


function CheckNodeC($nodex, $nodey){

    $db = new SQLITE3("AGdatabase.db"); 
    $db->busyTimeout(5000);
    
    
    $salt = $db->query('SELECT * FROM NODE WHERE NodeX = "'.$nodex.'" AND NodeY = "'.$nodey.'"');

    while($row = $salt->fetchArray()){

        return $row["NodeC"];
         
    }
    return 1;
    $db->close();

   

}

function AddNode($_nodex, $_nodey, $_color){

    $db = new SQLITE3("AGdatabase.db"); 
    

    
    $nodex = $_nodex;
    $nodey = $_nodey;
    $color = $_color;

    
   // $db->exec("INSERT INTO NODE (NodeX, NodeY, NodeC) VALUES ('$nodex', '$nodey', '$color')");
    $statement = $db->prepare('INSERT INTO "NODE" ("NodeX", "NodeY", "NodeC") VALUES (:x, :y, :c)');
    $statement->bindParam(':x', $nodex, SQLITE3_INTEGER);
    $statement->bindParam(':y', $nodey, SQLITE3_INTEGER);
    $statement->bindParam(':c', $color, SQLITE3_TEXT);

    $statement->execute();
    $db->close();




}

function NodeExist($_nodex, $_nodey){

    $nodex = $_nodex;
    $nodey = $_nodey;

    $db = new SQLITE3("AGdatabase.db"); 
    $db->busyTimeout(5000);
    
    $count = 0;
    $statement= $db->prepare('SELECT * FROM NODE WHERE NodeX=:nodex AND NodeY=:nodey');
    $statement->bindParam(':nodex', $nodex, SQLITE3_INTEGER);
    $statement->bindParam(':nodey', $nodey, SQLITE3_INTEGER);

    $result = $statement->execute();
  

    while($row = $result->fetchArray()){

        $saltkar = $row["NodeX"];
        $count++;
        
    }

    $db->close();

    if($count > 0){ 
        return true;
    }
    else{     
        return false;
    }
}

function ChangeNode($_nodex, $_nodey, $_color){

     
    $db = new SQLITE3("AGdatabase.db"); 
      
    $nodex = $_nodex;
    $nodey = $_nodey;
    $color = $_color;

    
   // $db->exec("INSERT INTO NODE (NodeX, NodeY, NodeC) VALUES ('$nodex', '$nodey', '$color')");
    $statement = $db->prepare('UPDATE "NODE" SET NodeC=:color WHERE NodeX=:nodex AND NodeY=:nodey');
    $statement->bindParam(':nodex', $nodex, SQLITE3_INTEGER);
    $statement->bindParam(':nodey', $nodey, SQLITE3_INTEGER);
    $statement->bindParam(':color', $color, SQLITE3_TEXT);

    $statement->execute();
    $db->close();




}


function CreateDB(){


    $db = new SQLite3(("AGdatabase.db"));


    $db->close();
}

?>