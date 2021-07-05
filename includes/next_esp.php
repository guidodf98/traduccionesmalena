<?php
$array_esp = array();
$array_esp[0] = 'tg';
$array_esp[1] = 'tt';
$array_esp[2] = 'lt';

if ($array_esp[0] == $_GET['esp']) {
  $aux1 = $array_esp[0];
  $array_esp[0] = $array_esp[2];
  $array_esp[2] = $aux1;
} else if ($array_esp[1] == $_GET['esp']) {
  $aux2 = $array_esp[1];
  $array_esp[1] = $array_esp[2];
  $array_esp[2] = $aux2;
}
?>