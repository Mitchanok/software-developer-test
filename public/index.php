<?php

ini_set('display_errors', 2);

require_once '../vendor/autoload.php';

session_start();
echo (new \App\Companies\CodeBros)->information();

?>