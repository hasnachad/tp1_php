<?php
namespace App\Entity;
use Core\Entity\Entity;

/**
*class pour stocker un enregistrement de la table utilisateurs
**/

class UtilisateurEntity extends Entity 
{
	public function getAge(){
		return (int)((time()-strtotime($this->date_de_naissance))/(60*60*24*365));
		//return $this->date_de_naissance;
	}

	public function getIdentite(){
		return strtoupper($this->nom).' '.ucfirst($this->prenom);
	} //met le nom en majuscule et la 1erer lettre du prenom




}