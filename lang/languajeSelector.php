<?php

if (isset($_GET['lang'])) {
  $option = $_GET['lang'];
} else {
  $option = 'es';
}

switch ($option) {
  case 'en':
    $lang_file = 'lang.en.php';
    break;
  case 'pr':
    $lang_file = 'lang.pr.php';
    break;
  case 'es':
    $lang_file = 'lang.es.php';
    break;
  default:
    $lang_file = 'lang.es.php';
    break;
}


include_once $lang_file;
