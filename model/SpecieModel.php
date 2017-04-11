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

function createSpecie()
{	
	$db = openDatabaseConnection();

	$specie = isset($_POST['specie']) ? $_POST['specie'] : null;

	if (strlen($specie) == 0) {
		return false;
	}

	$sql = "INSERT INTO species (specie) VALUES (:specie)";

	$query = $db->prepare($sql);

	$query->execute(array(
		":specie" => $specie
		));

	$db = null;

	return true;
}

function deleteSpecie($id)
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM species WHERE specie_id=:specie_id";
	
	$query = $db->prepare($sql);
	$query->execute(array(
		":specie_id" => $id));
	
	$db = null;
	
	return true;
}

function getSpecie($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species WHERE specie_id = :specie_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':specie_id' => $id));

	return $query->fetch();

	$db = null;

}

function editSpecie()
{
	$db = openDatabaseConnection();

	
	$sql = "UPDATE species 
	set specie = :specie	
	WHERE specie_id =:specie_id";

	$query = $db->prepare($sql);
	$query->execute(array(
		':specie_id' => $_POST["specie_id"],
		':specie' => $_POST["specie"]
		));

	$db = null;

	return true;
}