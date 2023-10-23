<?php
$peticion = "zonaUTL";

if (isset($_REQUEST['peticion'])) {
  $peticion = $_REQUEST['peticion'];
}

switch ($peticion) {
  case "zonaUTL":
    break;
  case "...":
    break;
  default:
    header('location:zonaUTL.php');
    break;
}
