<?php
$api_key='vyeJ0snvGu5V2DuiyhBgNLnUmOZfl09iIKPjl6N5';

// get method
$json = file_get_contents("https://developer.nrel.gov/api/pvwatts/v6.json?api_key=vyeJ0snvGu5V2DuiyhBgNLnUmOZfl09iIKPjl6N5&system_capacity=4&azimuth=180&tilt=40&array_type=1&module_type=1&losses=10&address=dhaka");
//creting array
// var_dump is important
$obj =(json_decode($json,true));
echo ($obj['inputs']['tilt']);
?>
