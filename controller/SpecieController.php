<?php

require(ROOT . "model/SpecieModel.php");

function index()
{
	render("specie/index", array("species" => getAllSpecies()));
}

function create()
{
	render("specie/create");
}

function createSave()
{	
	if (!createSpecie()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "specie/index");
}

function delete($id)
{	
	if (deleteSpecie($id) == true) {
		header("location:". URL . "specie/index");
		exit();
	}

		header("location:". URL . "error/index");

}

function edit($id)
{
	render("specie/edit", array('specie' => getSpecie($id)));
}

function editSave()
{

	if (editSpecie() == true) {
		header("location:". URL . "specie/index");
		exit();
	}

		header("location:". URL . "error/index");

}



