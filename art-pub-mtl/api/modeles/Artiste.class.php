<?php
/**
 * Class Oeuvre
 * 
 * @author Jonathan Martel modifié par Michel Plamondon et Saul Turbide.
 * @version 1.0
 * @update 2014-09-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 * 
 * 
 */
class Artiste extends Modele {	
	const TABLE_ARTISTE = "artiste";
	const TABLE_LIAISON_ARTISTE_OEUVRE = "oeuvre_artiste";
		
	/**
	 * Retourne la liste des oeuvres
	 * @access public
	 * @return Array
	 */
	public function getListe() 
	{
		$res = Array();
		$query = "select * from ". self::TABLE_ARTISTE;
		if($mrResultat = $this->_db->query($query))
		{
			while($artiste = $mrResultat->fetch_assoc())
			{
				foreach($artiste as $cle=> $valeur)
				{
					$artiste[$cle] = utf8_encode($valeur);
				}
				$res[] = $artiste;
			}
		}
		return $res;
	}
	
	/**
	 * Récupère une oeuvre avec son id
	 * @access public
	 * @param int $id Identifiant de l'oeuvre
	 * @return Array
	 */
	public function getArtiste($id) 
	{
		$res = Array();
		if($mrResultat = $this->_db->query("select * from ". self::TABLE_ARTISTE." where id_artiste=". $id))
		{
			$res = $mrResultat->fetch_assoc();
		}
		return $res;
	}

	public function deleteArtiste($id){
		$query = "DELETE
		FROM artiste 
		WHERE id_artiste = $id";

		var_dump($this->_db->query($query));

	}


	public function AjouterArtiste($aData){
		extract($aData);
		$query = "INSERT INTO artiste (nom, prenom, nom_collectif, biographie)
		VALUES ('$nom','$prenom', '$nom_collectif','$biographie')";
		$this->_db->query($query);
	}
    
    public function verifierArtisteExistant($nom, $prenom, $nom_collectif)
    {
        
		$res = Array();
		if($mrResultat = $this->_db->query("select * from ". self::TABLE_ARTISTE." where nom = '".$nom."' and prenom = '".$prenom."' and nom_collectif = '".$nom_collectif."'"))
		{
			$res = $mrResultat->fetch_assoc();
		}
		return $res;
    }

	
}




?>