<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="author" content="Christian BOUNGOU" />
    <meta name="copyright" content="Vinny vixi" />
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.5.6/plyr.css">   
    <link href="https://fonts.googleapis.com/css?family=Caveat:400,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,400,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/popup-cookies.js" type="text/javascript"></script>

</head>

<?php

require_once "autoload.php";

$pdo  = new PDO("mysql:host=localhost;dbname=vinny", "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);




$tableSons = $pdo->query("SELECT * FROM sons");

$sons = $tableSons->fetchAll(PDO::FETCH_ASSOC);



?>

<body>

    <div class="background">
        <div class="layout"></div>
        <img src="assets/images/headphones.jpg" alt="Background headphone" >
    </div>


