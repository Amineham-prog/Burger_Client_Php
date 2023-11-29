<?php

 $serveur = "localhost";
 $login = "snir";
 $pass = "makyous33";


 try{
     $connexion =  new PDO('mysql:host=localhost;dbname=burger;charset=utf8;port=3307', 'snir', 'makyous33');
     $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo 'Connexion à la base de donnees';
     
     $sql = 'SELECT items.name,items.image,items.price,items.description,categories.name AS "categories"
     FROM categories,items
     WHERE items.category=categories.id
     AND categories.name= "'.$categorie.'"';
    
     $post = $connexion->query($sql);
     $post->setFetchMode(PDO::FETCH_ASSOC);
     $resultats=$post->fetchAll();

 }

catch(PDOException $e){
   echo 'Echec de la connexion' .$e->getMessage();
}


?>