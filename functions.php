<?php 

function getProjectData() {

	$json = file_get_contents("data/projects.json");

	if ($json) {
		return json_decode($json, true);
	}
	else {
		return "error: could not find data";
	}
}

function getData($filePath) {
	$json = file_get_contents($filePath);

	if ($json) {
		return json_decode($json, true);
	}
	else {
		return "error: could not find data";
	}
}

