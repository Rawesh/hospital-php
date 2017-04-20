<?php

require(ROOT . "model/SpeciesModel.php");

function index()
{
	render("species/index", array("species" => getAllSpecies()));
}

function create()
{
	render("species/create");
}

function createSave()
{	
	if (!createSpecies()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "species/index");
}

function delete($id)
{	
	if (deleteSpecies($id) == true) {
		header("location:". URL . "species/index");
		exit();
	}

		header("location:". URL . "error/index");

}

function edit($id)
{
	render("species/edit", array('species' => getSpecies($id)));
}

function editSave()
{

	if (editSpecies() == true) {
		header("location:". URL . "species/index");
		exit();
	}

		header("location:". URL . "error/index");

}



