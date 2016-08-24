<?php
header('Content-Type: application/json');
$_q = urlencode($_GET['query']);

$curl = curl_init();

  curl_setopt ($curl, CURLOPT_URL, "https://maps.googleapis.com/maps/api/place/textsearch/json?key=AIzaSyBQWiSqX1JXY2oPq_tDmEifwnixiq0dvYs&query=".$_q);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec ($curl);
  curl_close ($curl);
  echo $result;


 ?>
