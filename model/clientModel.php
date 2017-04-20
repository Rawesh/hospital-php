 <?php

 function getAllClients()
 {
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients";
	$query = $db->prepare($sql);
	$query->execute();

	return $query->fetchAll();

	$db = null;
}

function createClient()
{	
	$db = openDatabaseConnection();

	$firstname = isset($_POST['client_firstname']) ? $_POST['client_firstname'] : null;
	$lastname = isset($_POST['client_lastname']) ? $_POST['client_lastname'] : null;

	if (strlen($firstname) == 0 || strlen($lastname) == 0) {
		return false;
	}

	$sql = "INSERT INTO clients (client_firstname, client_lastname)
	VALUES (:client_firstname, :client_lastname)";

	$query = $db->prepare($sql);

	$query->execute(array(
		":client_firstname" => $firstname,
		":client_lastname" => $lastname));	

	$db = null;

	return true;
}

function deleteClient($id)
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM clients WHERE client_id=:client_id";
	
	$query = $db->prepare($sql);
	$query->execute(array(
		":client_id" => $id));
	
	$db = null;
	
	return true;
}

function getClient($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients WHERE client_id = :client_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':client_id' => $id));

	return $query->fetch();

	$db = null;

}

function editClient()
{
	$db = openDatabaseConnection();

	
	$sql = "UPDATE clients
	set `client_firstname` = :client_firstname, `client_lastname` = :client_lastname
	WHERE client_id=:client_id";

	$query = $db->prepare($sql);
	$query->execute(array(
		':client_firstname' => $_POST["client_firstname"],
		':client_lastname' => $_POST["client_lastname"],
		':client_id' => $_POST["client_id"]));

	$db = null;

	return true;
}