<?php
   $servername = 'localhost';
   $username = 'root';
   $password = '';


   try{
   $idcom = new PDO("mysql:host=$servername;dbname=portfoliograndprod", $username, $password);
   $idcom->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }

   catch(PDOException $e){
       echo "Error de connexion" . $e->getMessage();
   }
?>