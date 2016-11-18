<?php

 try{
     $conn = new PDO ( "sqlsrv:server = tcp:dragonstest.database.windows.net,1433; Database = dragonsTest", "dragonstest", "Thisismypassword1!");
     $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
     $sql = "CREATE TABLE dragons (id int IDENTITY(1,1) PRIMARY KEY, name varchar(45) DEFAULT NULL, color varchar(45) DEFAULT NULL, element varchar(45) DEFAULT NULL, moves varchar(45) DEFAULT NULL, created_at datetime DEFAULT NULL, updated_at datetime DEFAULT NULL)";
     $conn->query($sql);

 }
 catch(Exception $e){
     die(print_r($e));
 }
 echo "<h3>Table created.</h3>";
 ?>
