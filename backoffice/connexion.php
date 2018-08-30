<?php

/** EXEMPLE D'UTILISATION :
 *
 * $sql = "SELECT descr FROM header";
 * $reponse = Database::getInstance()->request($sql);
 * $reponse['descr'];
 */

include 'config.php';

// Classe de gestion de la BDD
class Database
{
	// Instance de PDO
	private $_PDOInstance;

	// Instance de Database
	private static $_instance = null;

	/* ************************************************** */

	// Constructeur de Database
	private function __construct()
	{
		try
		{
			// syntax différente de tableau :
			// $option = array(); = $option = [];
			$option =
			[
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Signalisation des erreurs
				PDO::ATTR_EMULATE_PREPARES => false /* Vrai requêtes préparées */
			];

			$this->_PDOInstance = new PDO('mysql:host='.BDD_HOST.'; dbname='.BDD_DATABASE, BDD_USER, BDD_PASSWORD, $option);
		}
		catch (PDOException $e)
		{
			exit("Connexion à MySQL impossible : " . $e->getMessage());
		}
	}

	// Restourne une instance de Database
	// (Singleton: Une seule instance de DB pour tous les utilisateurs)
	public static function getInstance()
	{
		if (is_null(self::$_instance)) // On regarde si une instance de a déjà été créée
			self::$_instance = new Database(); // Si non, on la créer

		return self::$_instance;
	}

	/**
	 * Prépare la requête SQL
	 *
	 * @param $sql La requête SQL
	 * @param $fields Champs à traiter (WHERE, SET ...)
	 * @param $multiple La requête doit-elle retourner plusieurs résultats ?
	 */

	public function request($sql, $fields = false, $multiple = false)
	{
		try
		{
			$statement = $this->_PDOInstance->prepare($sql);
			if ($fields)
			{
				// Détecte de type de $fields
				foreach ($fields as $key => $value)
				{
					if(is_int($value))
						$dataType = PDO::PARAM_INT;
					else if (is_bool($value))
						$dataType = PDO::PARAM_BOOL;
					else if (is_null($value))
						$dataType = PDO::PARAM_NULL;
					else
						$dataType = PDO::PARAM_STR;

					$statement->bindValue(':'.$key, $value, $dataType);
				}
			}
			$statement->execute();

			if ($multiple)
				$result = $statement->fetchAll(PDO::FETCH_ASSOC);
			else
				$result = $statement->fetch(PDO::FETCH_ASSOC);

			$statement->closeCursor();

			return $result;
		}
		catch (Exception $e)
		{
			exit($e->getMessage());
		}
	}
}
