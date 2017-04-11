<?php

require(ROOT . "model/ClientModel.php");

function index()
{
	render("client/index", array("clients" => getAllClients()));
}

function create()
{
	render("client/create");
}

function createSave()
{	
	if (!createClient()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "client/index");
}

function delete($id)
{	
	if (deleteClient($id) == true) {
		header("location:". URL . "client/index");
		exit();
	}

		header("location:". URL . "error/index");

}

function edit($id)
{
	render("client/edit", array('client' => getClient($id)));
}

function editSave()
{

	if (editClient() == true) {
		header("location:". URL . "client/index");
		exit();
	}

		header("location:". URL . "error/index");

}

function read($id)
{
	render("client/read", array('client' => getClient($id)));
}



