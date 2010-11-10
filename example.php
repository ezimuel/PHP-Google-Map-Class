<?php
require_once 'GMaps.php';
		
// Your Google key
$google_key = '';

if (!empty($_POST)) {
    $search= strip_tags($_POST['search']);
}    

echo '<form method="post" action="example.php"><input type="text" name="search">';
echo '<input type="submit" value="Get geographic data!"></form>';
    
if (!empty($search)) {

    // Get the Google Maps Object
    $GMap = new GMaps($google_key);

    if ($GMap->getInfoLocation($search)) {

        echo 'Address: '.$GMap->getAddress().'<br>';
        echo 'Country name: '.$GMap->getCountryName().'<br>';
        echo 'Country name code: '.$GMap->getCountryNameCode().'<br>';
        echo 'Administrative area name: '.$GMap->getAdministrativeAreaName().'<br>';
        echo 'Postal code: '.$GMap->getPostalCode().'<br>';    
        echo 'Latitude: '.$GMap->getLatitude().'<br>';
        echo 'Longitude: '.$GMap->getLongitude().'<br>';
        
    } else {
        echo "The response of Google Maps is empty";
    }
    
}