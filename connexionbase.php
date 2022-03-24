<?php
//connexion a la base
     try
     {
         $bdb = new PDO('mysql:host=localhost;port=3306;dbname=my_shop','root',123456);
         
     }
     catch(PDOException $e)
     {
         echo "Error:", $e->getMessage();
     }

