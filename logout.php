<?php
session_start();
$_SESSION['Aprovado'] = false;

header('Location: login.php');


?>