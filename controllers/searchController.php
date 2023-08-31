<?php

if (isset($_POST['recherche'])) {
   extract($_POST);
   if(search($_POST['nom'])){
      return require_once("views/ptretrouve.php");
   }
   // $pr = search($_POST['nom']);
  
}

require_once('views/search.php');