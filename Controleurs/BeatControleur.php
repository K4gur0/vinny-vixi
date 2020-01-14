<?php

class BeatControleur
{
    public function ajouter(){
		
			$modeleBeat = new Beat;
			if($_POST){
				// if($_FILES){
				// 	$nomImage = $this->entite->dernierId() . "_" . $_FILES["photo"]["name"];
				// 	$copie = copy($_FILES["photo"]["tmp_name"],  "assets/img/agences/" . $nomImage);
				// 	if($copie){
				// 		$_POST["photo"] = $nomImage;
				// 	}
				// }
				$beatAjoute = $modeleBeat->ajouter($_POST);
				if($beatAjoute){
					$msg = "Nouveau Beat ajouté";
				}
				else{
					$msg = "La nouvelle agence n'a pas été ajoutée";
				}
				// $agences = $modeleBeat->selectionnerTout();				
				// return $this->rendu("formulaire", [ "agences" => $agences, "msg" => $msg ]);

			}
			// else{
			// 	$agences = $modeleBeat->selectionnerTout();				
			// 	return $this->rendu("formulaire", [ "agences" => $agences ]);
			// }
		
	}
}