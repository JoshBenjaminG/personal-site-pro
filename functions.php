<?php 

function getProjectData() {

		$json = file_get_contents("data/projects.json");

		if($json) {
			return json_decode($json, true);
		}
		else {
			return "error: could not find data";
		}
	}

// function getHomeData() {

// 		$json = file_get_contents("data/pages/home.json");

// 		if($json) {
// 			return json_decode($json, true);
// 		}
// 		else {
// 			return "error: could not find data";
// 		}
// 	}

function getData($data) {
		$json = file_get_contents("data/" . $data . ".json");

		if($json) {
			return json_decode($json, true);
		}
		else {
			return "error: could not find data";
		}
	}

