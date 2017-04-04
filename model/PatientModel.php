<?php

function getAllPatiens() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients";
	$query = $db->prepare($sql);
	$query->execute();

	return $query->fetchAll();

	$db = null;

}

function createPatient()
{	
	$db = openDatabaseConnection();

	$name = isset($_POST['patient_name']) ? $_POST['patient_name'] : null;
	$species = isset($_POST['species']) ? $_POST['species'] : null;
	$status = isset($_POST['status']) ? $_POST['status'] : null;

	if (strlen($name) == 0 || strlen($species) == 0 || strlen($status) == 0) {
		return false;
	}

	$sql = "INSERT INTO patients (patient_name, species, status)
	VALUES (:patient, :species, :status)";

	$query = $db->prepare($sql);

	$query->execute(array(
		":patient" => $name,
		":species" => $species,
		":status" => $status));	

	$db = null;

	return true;
}

function deletePatient()
{
	$db = openDatabaseConnection();

	$id = $_GET['id'];
	$sql = "DELETE FROM patients WHERE id=:id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));


	$db = null;

	return true;
}

function editPatient()
{
	$db = openDatabaseConnection();

	
	$sql = "UPDATE patients 
	set `patient_name` = :patient, `species`= :species, `status` = :status; 
	WHERE id=:id";

	$query = $db->prepare($sql);
	$query->execute(array(
  ));


	$db = null;

	return true;
}

