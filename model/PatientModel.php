<?php

function getAllPatients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients";
	$query = $db->prepare($sql);
	$query->execute();

	return $query->fetchAll();

	$db = null;

}

function getPatient($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients WHERE patient_id = :patient_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':patient_id' => $id));

	return $query->fetch();

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

function deletePatient($id)
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM patients WHERE patient_id=:patient_id";
	
	$query = $db->prepare($sql);
	$query->execute(array(
		":patient_id" => $id));
	
	$db = null;
	
	return true;
}

function editPatient()
{
	$db = openDatabaseConnection();

	
	$sql = "UPDATE patients
	set `patient_name` = :patient, `species` = :species, `status` = :status 
	WHERE patient_id=:patient_id";

	$query = $db->prepare($sql);
	$query->execute(array(
		':patient' => $_POST["patient_name"],
		':species' => $_POST["species"],
		':status' => $_POST["status"],
		':patient_id' => $_POST["patient_id"]));

	$db = null;

	return true;
}

