<?php

require(ROOT . "model/PatientModel.php");

function index()
{
	render("patient/index", array("patients" => getAllPatients()));
}

function create()
{
	render("patient/create");
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
	render("patient/edit", array('patient' => getPatient($id)));
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

