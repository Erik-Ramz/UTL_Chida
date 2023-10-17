<?php
  $peticion="home";
  extract($_REQUEST);
  switch($peticion){
    case "home":
        break;
    case "...":
        break;
    default:
    header('location:?peticion=home');
        break;
  }

?>