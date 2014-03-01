<?php
ini_set('display_errors', 'On');

include_once "datamanager.php";
$dataManager = new DataManager();
$array = $dataManager->getSensorsForNetwork("000000006ec60c84");
foreach($array as $node){
        echo $node."<br />";
}
?>