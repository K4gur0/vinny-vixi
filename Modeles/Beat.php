<?php



class Beat extends Modele
{
    private $titre;
    private $artiste;
    private $genre;
    private $url = "assets/audios/";

    public function setTitre($titre)
    {
        $this->titre=$titre;
    }
    public function getTitre()
    {
       return $this->titre;
    }

    public function setArtiste($artiste)
    {
        $this->artiste=$artiste;
    }
    public function getArtiste()
    {
       return $this->artiste;
    }

    public function setGenre($genre)
    {
        $this->genre=$genre;
    }
    public function getGenre()
    {
       return $this->genre;
    }

    public function setUrl($url)
    {
        $this->url=$url;
    }
    public function getUrl()
    {
       return $this->url;
    }


    public function ajouter() {
        $pdo = new PDO('mysql:host=localhost;dbname=vinny', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8") );
		$requete = $pdo->query("INSERT INTO sons(titre, artiste, genre, url) VALUES ('$_POST[titre]', '$_POST[artiste]', '$_POST[genre]', '$_POST[url]) ");
		return $requete;
    }
    
}