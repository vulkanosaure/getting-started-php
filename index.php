<?php
$cities = array("Amsterdom", "Berlin", "New York", "San Francisco", "Tokyo");

header('Content-Type: application/json');
echo json_encode($cities, JSON_PRETTY_PRINT);
?>
