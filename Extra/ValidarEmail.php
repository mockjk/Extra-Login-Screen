<?php

session_start();
$login = $_POST['login'];

if(isset($_POST['login'])){
    $_SESSION['login'] = $_POST['login'];
}

header("location: home.php?login=$login");




?>