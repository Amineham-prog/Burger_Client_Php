<!DOCTYPE html>
<html>
 <head>
 <style type="text/css">
.mynav{
  background-color:#241b18;
    opacity: 0.80;
    border: 1px solid #ffffff;
    border-radius: 40px;
    
}
nav{
  color:#ffffff;
}

</style>
<?php require "./template/head.php"; ?>  
</head>


    <body>
        <!---nav de bootstrap/navbar-dark/------------------------------------------------------------------------------->
        <?php require "./template/navbar.php"; ?>
        <!------------------------ End Nav ---------------------------------------------------->


<div class="container"><!--------------------Container Géneral  ------------------------------->
<!----------CAROUSSEL ---------------------------------------------->
<?php require "./template/caroussel.php"; ?>   
 <!---------end caroussel ------------------------------------------>



<?php 

if(empty($_GET["cat"])){
  $categorie="Menus";
}else{
 $categorie=$_GET["cat"];
}
echo '

<div class="row row-content">
<div class=col-12>

<nav class="navbar navbar-expand-lg  mynav">
<div class="container-md list ">
  <a class="navbar-brand" href= "./index.php?cat=Menus">|Menus|</a>
  <a class="navbar-brand" href="./index.php?cat=Burgers">|Burgers| </a>
  <a class="navbar-brand" href="./index.php?cat=Snacks">|Snack|</a>
  <a class="navbar-brand" href="./index.php?cat=Salades">|Salades|</a>
  <a class="navbar-brand" href="./index.php?cat=Boissons">|Boissons| </a>
  <a class="navbar-brand" href="./index.php?cat=Desserts">|Desserts|</a>
</div>
</nav>

</div>

';
require_once('./data/data.php');
 
 ?>  

  <?php

  

/*
echo '<pre>';
  print_r($resultats);
  echo '<pre>';
  */
?>
  <?php 
   foreach($resultats as $resultat){
     echo '
     <div class="col-12 col-sm-6 col-md-4">
      <!-----------CARD-------------->
      <div class="card mycard">
        <img class="card-img-top photo" src="./img/'. $resultat['image'] .'" alt="Card image cap">
        <div class="card-body bodycard">
          <h5 class="card-title">'. $resultat['name'] .'</h5>
          <p class="card-text contentcard">'. $resultat['description'] .'</p>
        </div>
        <div class="card-body bodycard">
          <!-------Button ------------------------------------>
          <button type="button" class="btn btn btn-success"  role="button">
            <span class="fa fa-sign-in"></span>  <a href="detail.php?cat='. $resultat['categories'] .'&item='. $resultat['name'] .' "> Voir </a></button>
          <!----------------------------------------------->
        </div>
      </div>
      <!----------END CARD ------------------>

  </div>
     
     ';
   }
   ?>

    


  
  </div>

</div> 





</div>
    </body>


      
</html>