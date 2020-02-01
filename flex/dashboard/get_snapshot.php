<?php

$snapshot = $_GET['snapshot'];

// data : dengue Ncr (searches) ,MOnth to date, month to date death, ave temp, rainfall, forecast cases
$data_array['Jan-19'] = ["21,770","6,215", "35", "30", "41", "9,379"]; 
$data_array['Feb-19'] = ["21,400","7,321", "28", "31", "50", "6,672"]; 
$data_array['Mar-19'] = ["35,920","10,307", "79", "28", "631", "9,165"]; 
$data_array['Apr-19'] = ["118,380","19,203", "88", "28", "622", "21,675"]; 
$data_array['May-19'] = ["21,770","6,215", "35", "30", "41", "9,379"]; 
$data_array['Jun-19'] = ["21,400","7,321", "28", "31", "50", "6,672"]; 
$data_array['Jul-19'] = ["35,920","10,307", "79", "28", "631", "9,165"]; 
$data_array['Aug-19'] = ["118,380","19,203", "88", "28", "622", "21,675"]; 
$data_array['Sep-19'] = ["21,770","6,215", "35", "30", "41", "9,379"]; 
$data_array['Oct-19'] = ["21,400","7,321", "28", "31", "50", "6,672"]; 
$data_array['Nov-19'] = ["35,920","10,307", "79", "28", "631", "9,165"]; 
$data_array['Dec-19'] = ["118,380","19,203", "88", "28", "622", "21,675"]; 
$result = '';

if ($snapshot) {
	$result .= '<div class="w3-col l4 m6 w3-padding-small"><div class="w3-card w3-white w3-padding w3-padding-16"><i class="fas fa-search" style="margin-right: 10px;"></i>Dengue CALABARZON<span class="w3-right">'.$data_array[$snapshot][0].' searches</span></div></div>';
	$result .= '<div class="w3-col l4 m6 w3-padding-small"><div class="w3-card w3-white w3-padding w3-padding-16"><i class="fas fa-users" style="margin-right: 10px;"></i>Month-to-date Cases<span class="w3-right">'.$data_array[$snapshot][1].' patients</span></div></div>';
	$result .= '<div class="w3-col l4 m6 w3-padding-small"><div class="w3-card w3-white w3-padding w3-padding-16"><i class="fas fa-cross" style="margin-right: 10px;"></i>Month-to-date Deaths<span class="w3-right">'.$data_array[$snapshot][2].' patients</span></div></div>';
	$result .= '<div class="w3-col l4 m6 w3-padding-small"><div class="w3-card w3-white w3-padding w3-padding-16"><i class="fas fa-thermometer-half" style="margin-right: 10px;"></i>Average Temperature<span class="w3-right">'.$data_array[$snapshot][3].'C</span></div></div>';
	$result .= '<div class="w3-col l4 m6 w3-padding-small"><div class="w3-card w3-white w3-padding w3-padding-16"><i class="fas fa-cloud-rain" style="margin-right: 10px;"></i>Average Rainfall<span class="w3-right">'.$data_array[$snapshot][4].'mm</span></div></div>';
	$result .= '<div class="w3-col l4 m6 w3-padding-small"><div class="w3-card w3-white w3-padding w3-padding-16"><i class="fas fa-users" style="margin-right: 10px;"></i>Forecast Cases<span class="w3-right">'.$data_array[$snapshot][5].' patients</span></div></div>';
}
echo $result;