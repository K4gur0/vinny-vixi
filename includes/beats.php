
<style>

    /* section#beats
    {
        height:100vh;
    } */
    div.listeBlockBeats
    {
        width:80%;
        margin:auto;
        display:flex;
        flex-direction:column;
        justify-content:space-around;
        align-items:space-around;
    }
    div.listeBlockBeats div.plyr
    {
        z-index:0;
        margin:10px 0;
    }

    select#genre, select#genre *
    {
        color:black;
    }

</style>


<section id="beats">

    <div class="titre">
        <h2>beats</h2>
    </div>

    <div class="listeBlockBeats">

            
            <form action="#beats" method="GET" >

            <iframe src="//www.beatstars.com/embed/track/?id=1566125" width="100%" height="140" style="border: none;"></iframe>
            <iframe src="//www.beatstars.com/embed/track/?id=1563497" width="100%" height="140" style="border: none;"></iframe>

                <select id="genre">
                <option value="all">Tout les genres</option>

                <?php 
                    $pdo = new PDO("mysql:host=localhost;dbname=vinny", "root", "");
                    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                    $genre = $pdo->query("SELECT genre FROM sons GROUP BY genre ");
                    $listeGenre = $genre->fetchAll(PDO::FETCH_ASSOC);
                    
                    

                    foreach($listeGenre as $genres)
                    {
                        echo "<option value='" . $genres['genre'] . "'>" . $genres['genre'] . "</option>";
                    }    

                    if(isset($_GET["genre"]))
                    {
                        
                    // $_GET["genre"] = htmlspecialchars($_GET["genre"]); //pour sécuriser le formulaire contre les failles html
                    // $select_genre = $pdo->query("SELECT genre FROM sons WHERE genre LIKE '$genres[genre]' ");
                    // $listeGenreSelectionne = $select_genre->fetchAll(PDO::FETCH_ASSOC);  
                    // var_dump($listeGenreSelectionne) ;
                    }
                    // else
                    // {
                    // $message = "Vous devez entrer votre requete dans la barre de recherche";
                    // }
                    
                ?>


                </select>
                <input type="submit" name="genre">
            </form>

                <?php  

                $pdo  = new PDO("mysql:host=localhost;dbname=vinny", "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);

                while(isset($_GET["genre"]))
                    {
                        $tableSons = $pdo->query("SELECT * FROM sons WHERE genre = 'Rap US' ");

                        $sons = $tableSons->fetchAll(PDO::FETCH_ASSOC);

                        // include_once("Vues/Beat/fiche.php");


                        foreach($sons as $selectSon)
                        {
                        echo "
                        <label>". $selectSon['titre'] . "<audio class='js-player' controls preload='metadata' ontimeupdate='update(this)' id='audio' title='titre'>
                        <br>
                        <source src='" .  $selectSon['url'] . "' type='audio/mpeg'>
                        </audio></label>";
                        }
                    break;
                    // $_GET["genre"] = htmlspecialchars($_GET["genre"]); //pour sécuriser le formulaire contre les failles html
                    // $select_genre = $pdo->query("SELECT genre FROM sons WHERE genre LIKE '$genres[genre]' ");
                    // $listeGenreSelectionne = $select_genre->fetchAll(PDO::FETCH_ASSOC);  
                    // var_dump($listeGenreSelectionne) ;
                    }

                ?>

            
            
    </div>

</section>