<?php
    session_start();
    // print_r($_SESSION);

    /* Si ya hay una sesion redirecciona a index.php */
    if(isset($_SESSION['username']) != 'acosta032'){
        header("location:login.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css">
    <title>Portfolio</title>
</head>
<body> 
    <div class="container">
        <a href="index.php">Home</a> |
        <a href="portfolio.php">Portfolio</a> |
        <a href="logout.php">Logout</a>