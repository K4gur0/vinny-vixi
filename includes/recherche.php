<?php

$pdo  = new PDO("mysql:host=localhost;dbname=vinny", "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);

// $tableSons = $pdo->query("SELECT * FROM sons");



    // Je teste pour savoir si j'ai quelque chose dans POST
    if(isset($_POST['keywords']) && !empty($_POST)) {
        // J'ai quelque chose donc je peux continuer


        // Je commence à séparer les différents mots clés
        $keywords = explode(' ', $_POST['keywords']);
        // J'initialise ma variable pour la requête SQL
        $like = "";
        foreach($keywords as $keyword) {
            // Si le mot clé est supérieur à 3 caractères (tu n'es pas obligé)
            if(strlen($keyword) >= 3) {
                // Je concatène
                // Le % en SQL est un joker, ça remplace n'importe quel caractère. Si tu veux que se soit une recherche explicite retire les %
                $like.= "artiste LIKE '%".$keyword."' OR";
                $like.= " artiste LIKE '%".$keyword."%' OR";
                $like.= " artiste LIKE '".$keyword."%' OR";

                $like.= " titre LIKE '%".$keyword."' OR";
                $like.= " titre LIKE '%".$keyword."%' OR";
                $like.= " titre LIKE '".$keyword."%' OR";

                $like.= " genre LIKE '%".$keyword."' OR";
                $like.= " genre LIKE '%".$keyword."%' OR";
                $like.= " genre LIKE '".$keyword."%' OR";
            }else 
                {
                // Je n'ai rien, j'informe l'utilisateur 
                die('Aucun resultats n\'est associer à votre recherche');
                }
        }
        // Je retire le dernier OR qui n'a pas lieu d'être
        $like = substr($like, 0, strlen($like) - 3);
        //Connexion à ta base de données
        $req = "SELECT * FROM sons WHERE " . $like;
        //Traitement de tes résultats
        $tableSons = $pdo->query($req);
        $sons = $tableSons->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($sons);
        // echo $sons['artiste'];

            echo "<table style='border: 1px solid #333;'>";
                echo "<tr style='border: 1px solid #333;'>";
                    echo "<td style='border: 1px solid #333;'>titre</td>";
                    echo "<td style='border: 1px solid #333;'>artiste</td>";
                    echo "<td style='border: 1px solid #333;'>genre</td>";
                echo "</tr>";
                
                    foreach($sons as $value)
                    {
                        echo "<tr style='border: 1px solid #333;'>";
                            echo  "<td style='border: 1px solid #333;'>" . $value['titre'] . "</td>";
                            echo "<td style='border: 1px solid #333;'>" . $value['artiste'] . "</td>";
                            echo "<td style='border: 1px solid #333;'>" . $value['genre'] . "</td>";
                        echo "</tr>";
                    }
                
            echo "</table>";
        
        
    }else{
        // Je n'ai rien, j'informe l'utilisateur 
        die('Veuillez saisir quelque chose dans le champs de recherche.');
    }
?>