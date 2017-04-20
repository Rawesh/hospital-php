<?php

function getAllPatients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT `patients`.`patient_id`,`patients`.`patient_name`, `patients`.`patient_status`, `species`.`species_description`, `clients`.`client_firstname`, `clients`.`client_lastname` FROM patients 
		INNER JOIN species ON `patients`.`species_id` = `species`.`species_id` 
		INNER JOIN clients ON `patients`.`client_id` = `clients`.`client_id`";
	$query = $db->prepare($sql);
	$query->execute();

	return $query->fetchAll();

	$db = null;

}

function getPatient($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients 
	INNER JOIN species ON `patients`.`species_id` = `species`.`species_id`
	INNER JOIN clients ON `patients`.`client_id` = `clients`.`client_id`
	WHERE patient_id = :patient_id";
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
	$species = isset($_POST['specie']) ? $_POST['specie'] : null;
	$status = isset($_POST['status']) ? $_POST['status'] : null;
	$client = isset($_POST['client']) ? $_POST['client'] : null;

	if (strlen($name) == 0 || strlen($species) == 0 || strlen($status) == 0) {
		return false;
	}

	$sql = "INSERT INTO patients (patient_name, species_id, patient_status, client_id)
	VALUES (:patient, :species, :status, :client)";

	$query = $db->prepare($sql);

	$query->execute(array(
		":patient" => $name,
		":species" => $species,
		":status" => $status,
		":client" => $client));	

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
	set `patient_name` = :patient, `status` = :status, `species` = :species,
		 `client_firstname` = :client_firstname, `client_lastname` = :client_lastname 
	WHERE patient_id = :patient_id";

	$query = $db->prepare($sql);
	$query->execute(array(
		':patient' => $_POST["patient_name"],
		':status' => $_POST["status"],
		':species' => $_POST["species"],
		':client_firstname' => $_POST["client_firstname"],
		':client_lastname' => $_POST["client_lastname"],
		':patient_id' => $_POST["patient_id"]));

	$db = null;

	return true;
}

