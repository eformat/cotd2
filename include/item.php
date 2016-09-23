<?php

if (!isset($_SESSION)) { session_start(); }
include('rank.php');

$_SESSION['favorite'] = $_SERVER['QUERY_STRING'];
if ($_SESSION['favorite']!=null) {
  error_log($_SERVER['REMOTE_ADDR']." "." --> Favorite is --> ".$_SESSION['favorite']);
}

$rating = 0;
$nextpage = '';
parse_str($_SERVER['QUERY_STRING']);
if ($rating != null and $nextpage != null) {
  $_SESSION['rating_'.$nextpage] = $rating;
}

$items = $_SESSION['items'];
$ranks = $_SESSION['ranks'];
$_SESSION['topitem'] = $ranks[0];
$_SESSION['lastitem'] = $ranks[sizeof($ranks)-1];

$i = 0;
foreach ($items as $item) {
  $_SESSION['next'][$i] = $_SESSION['topitem'];
  $_SESSION['prev'][$i] = $_SESSION['lastitem'];
  $i = $i + 1;
}

$i = 0;
foreach ($items as $item) {
  $j = 0;
  foreach ($ranks as $rank) {
    if ($rank == $item) {
      $_SESSION['rank'][$i] = $j;
      if ($rank != $_SESSION['lastitem']) { 
          $_SESSION['next'][$i] = $ranks[$j+1]; 
      }
      if ($rank != $_SESSION['topitem']) { 
          $_SESSION['prev'][$i] = $ranks[$j-1]; 
      }
    }
    $j = $j + 1;
  }
  $i = $i +1;
}

?>
