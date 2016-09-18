<?php

if (!isset($_SESSION)) { session_start(); }
include('include/item.php');
header( 'Location: item.php' );

?>
