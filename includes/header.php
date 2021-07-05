<?php
include_once './lang/languajeSelector.php';
include_once './includes/variables.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php if (isset($_GET['esp'])) { echo $lang[$_GET['esp']][$title]; } else { echo $lang[$title]; }?> | Traducciones Malena</title>
  <link rel="stylesheet" href="http://localhost/traducciones-testeo/sass/main.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;700&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="favicon.ico">
  <script src="./js/languajeChanger.js"></script>
</head>

<body>