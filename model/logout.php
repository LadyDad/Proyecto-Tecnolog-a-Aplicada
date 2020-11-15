<?php
session_start();

$_SESSION["validar"] = 0;

header('location: ../views/cuenta.php');