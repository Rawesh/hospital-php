 <?php

 function getAllSpecies()
 {
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();

	return $query->fetchAll();

	$db = null;
}

function createSpecies()
{	
	$db = openDatabaseConnection();

	$species = isset($_POST['species']) ? $_POST['species'] : null;

	if (strlen($species) == 0) {
		return false;
	}

	$sql = "INSERT INTO species (species_description) VALUES (:species)";

	$query = $db->prepare($sql);

	$query->execute(array(
		":species" => $species
		));

	$db = null;

	return true;
}

function deleteSpecies($id)
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM species WHERE species_id=:species_id";
	
	$query = $db->prepare($sql);
	$query->execute(array(
		":species_id" => $id));
	
	$db = null;
	
	return true;
}

function getSpecies($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species WHERE species_id = :species_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':species_id' => $id));

	return $query->fetch();

	$db = null;

}

function editSpecies()
{
	$db = openDatabaseConnection();

	
	$sql = "UPDATE species 
	set species_description = :species	
	WHERE species_id =:species_id";

	$query = $db->prepare($sql);
	$query->execute(array(
		':species_id' => $_POST["species_id"],
		':species' => $_POST["species"]
		));

	$db = null;

	return true;
}