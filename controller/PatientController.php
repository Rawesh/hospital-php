<?php

require(ROOT . "model/PatientModel.php");
require(ROOT . "model/SpeciesModel.php");
require(ROOT . "model/ClientModel.php");

function index()
{
	render("patient/index", array("patients" => getAllPatients()
									));
}

function create()
{
	render("patient/create", array(
		"species" => getAllSpecies(),
		"clients" => getAllClients()
		));
}

function createSave()
{
	if (!createPatient()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "patient/index");
}

function delete($id)
{	
	if (deletePatient($id) == true) {
		header("location:". URL . "patient/index");
		exit();
	}

		header("location:". URL . "error/index");

}

function edit($id)
{
	render("patient/edit", array("clients" => getAllClients(),
								 "species" => getAllSpecies(),
								 "patient" => getPatient($id),
								 "editclient" => getClient($id)
								 ));
}

function editSave()
{

	if (editPatient() == true) {
		header("location:". URL . "patient/index");
		exit();
	}

		header("location:". URL . "error/index");

}

function read($id)
{
	render("patient/read", array('patient' => getPatient($id)));
}

