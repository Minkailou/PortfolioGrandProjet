<?php 

   include('idcom.php');
   include('header.php');

   ?>
    <link rel="stylesheet" href="output.css" />
 <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
 <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"> 
 





 <div class="heading text-center font-bold text-2xl m-5 text-gray-100"></div>
    <div class=" mx-auto w-10/12 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4">

 


 
 <?php

   $requete = $idcom->query("SELECT * FROM production ORDER BY id DESC");
   while($user= $requete ->fetch()){
   ?>
  


  <div class="each mb-10 m-2 shadow-lg border-gray-800 bg-gray-100 relative">
  <a href="<?="$user[lien_projet]"?>" target="_new" class="title font-bold block cursor-pointer hover:underline">
    <img class="w-full" src='./imgProd/<?="$user[img_prod]"?>' width='230' height='260' alt='toff'>
    </a>
    <div class="info-box text-xs flex p-1 font-semibold text-gray-500 bg-gray-300">
    </a>
      
    </div>
    <div class="desc p-4 text-gray-800">
      <a href="<?="$user[lien_projet]"?>" target="_new" class="title font-bold block cursor-pointer hover:underline"><?="$user[titre]"?></a>
      <span class="description text-sm block py-2 border-gray-400 mb-2"><?="$user[descri_ption]"?></span>
      <a href="<?="$user[lien_github]"?>">Lien github</a>
      
      

    </div>
    </div>




<?php


    }
 
?>


</div>
   
   
    







       
       
       
       
       
      


