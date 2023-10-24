<?php
  $peticion="index";
  extract($_REQUEST);
  switch($peticion){
    case "index":
        break;
    case "...":
        break;
    default:
    header('location:?peticion=index');
        break;
  }

?>