<?php

function connector($servername,$username,$password,$db){

    //need to use this variable in another php file;
    GLOBAL $link;
    $mysqli = new mysqli($servername, $username, $password, $db);
    $link = mysqli_connect($servername, $username, $password, $db);
    //GLOBAL $link;
    
    /* check connection */
    if (!$link) {
         echo "Failed to connect to the database" . $servername;
         exit(1);  
      
    }
    
    
}


?>