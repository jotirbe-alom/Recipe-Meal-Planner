<?php

session_start();

if(isset($_SESSION['food_artisan_id']))
{
    unset($_SESSION['food_artisan_id']);

}

header("Location: index.html");
die;