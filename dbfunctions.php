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

    
    $db->exec("INSERT INTO NODE (NodeX, NodeY, NodeC) VALUES ('$nodex', '$nodey', '$color')");
    // $statement = $db->prepare('INSERT INTO "NODE" ("NodeX", "NodeY", "NodeC") VALUES (:x, :y, :c)');
    // $statement->bindParam(':x', $nodex, SQLITE3_INTEGER);
    // $statement->bindParam(':y', $nodey, SQLITE3_INTEGER);
    // $statement->bindParam(':c', $color, SQLITE3_INTEGER);

    // $statement->execute();
    //$db->close();




}


function CreateDB(){


    $db = new SQLite3(("AGdatabase.db"));


    $db->close();
}

?>