<?php
// Simulated country-city data
$countryCities = [
    "USA" => ["New York", "Los Angeles", "Chicago", "Houston"],
    "India" => ["Delhi", "Mumbai", "Bangalore", "Chennai"],
    "nepal" => ["kathmandu", "dhankuta", "Biratnagar", "itahari"]
];

// Get the country from the request
if (isset($_GET['country'])) {
    $country = $_GET['country'];

    if (array_key_exists($country, $countryCities)) {
        echo json_encode($countryCities[$country]);
    } else {
        echo json_encode([]);
    }
} else {
    echo json_encode([]);
}
?>