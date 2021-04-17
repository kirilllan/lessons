<?php
$data = file_get_contents('data.json');

$formatted_data = json_decode($data, true);
$results = $formatted_data['results'];
$formatted_results = array();

for ($i = 0; $i < count($results); $i++) {
    $formatted_results[$i]['name'] = strtoupper($results[$i]['name']);
    $formatted_results[$i]['url'] = $results[$i]['url'];
}

$json_formatted_results = json_encode($formatted_results);
echo $json_formatted_results;

$write_file_result = file_put_contents('formatted_data.json', $json_formatted_results);
