<?php

require(ROOT . "model/PatientModel.php");

function index()
{
	render("patient/index", array("patients" => getAllPatiens()));
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

function delete()
{	
	if (deletePatient() == true) {
		header("location:". URL . "patient/index");
		exit();
	}

		header("location:". URL . "error/index");

}

function edit()
{
	render("patient/edit");
}

function editSave()
{

}

