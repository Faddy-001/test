<?php

// to start a session
session_start();
$_SESSION["name"]="fuddy";



print_r($_SESSION);

unset($_SESSION['name']);


?>