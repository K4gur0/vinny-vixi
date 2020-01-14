<?php

require_once "../autoload.php";

// include_once(__DIR__ . 'index.php');


$bdd = new PDO("mysql:host=localhost;dbname=vinny", "root", "");
$bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if(isset($_GET["s"]) AND $_GET["s"] == "Rechercher")
{
 $_GET["terme"] = htmlspecialchars($_GET["terme"]); //pour sécuriser le formulaire contre les failles html
 $terme = $_GET['terme'];
 $terme = trim($terme); //pour supprimer les espaces dans la requête de l'internaute
 $terme = strip_tags($terme); //pour supprimer les balises html dans la requête
//  $termeModif = strtolower(str_replace(' ','',$terme));
//  $termeModif = substr($terme,0,3);
}

if (isset($terme))
{
 $terme = strtolower($terme);
 $select_terme = $bdd->prepare("SELECT titre, artiste, genre FROM sons WHERE titre LIKE '$terme' OR artiste LIKE '$terme' OR  genre LIKE '$terme'");
 $select_terme->execute(array("%".$terme."%", "%".$terme."%", "%".$terme."%"));
}
else
{
 $message = "Vous devez entrer votre requete dans la barre de recherche";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
  <?php
  // while($terme_trouve = $select_terme->fetch())
  // {
  //  echo "<div><h2>".$terme_trouve['titre']."</h2><p> ".$terme_trouve['artiste']."</p>";
  // }
  // $select_terme->closeCursor();
  var_dump($bdd);
  var_dump($terme);
  var_dump($select_terme);


  $sons = $bdd->query("SELECT titre, artiste, genre FROM sons WHERE titre = '$terme' OR artiste = '$terme' OR genre = '$terme' ");

  // $listSons = $bdd->query("SELECT titre, artiste, genre FROM sons");
  // foreach( $listSons as $value)
  // { 
  //   echo "Titre : " . strtolower(str_replace(' ','',$value['titre'])) . "<br>";
  //   echo "Artiste : " . strtolower(str_replace(' ','',$value['artiste'])) . "<br>";
  //   echo "Genre : " . strtolower(str_replace(' ','',$value['genre'])) . "<hr>";
  // }

  foreach( $sons as $value)
  { 
    echo "Titre : " . $value['titre'] . "<br>";
    echo "Artiste : " . $value['artiste'] . "<br>";
    echo "Genre : " . $value['genre'] . "<hr>";
  }

  if($terme)

   ?>

</body>
</html>
