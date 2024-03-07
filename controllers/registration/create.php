<?php

$heading = 'Create account';
$title = 'Create account';

if ($_SESSION['user'] ?? false) {
    header("location: /home");
} 

require('view/registration/create.view.php');