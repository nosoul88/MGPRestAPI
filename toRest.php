<?php
include_once("Constants.php");
include_once("Class/Models/Container.php");
include_once("Class/Factory/Factory.php");
$Container = new Container(200, "");
//var_dump($_GET);
if($_GET)
{
  $serviceName = $_GET["serviceName"];
  $factoryServiceName = $serviceName;

  if(array_key_exists( $serviceName, $BASE_SERVICES_TYPES))
    $factoryServiceName = $BASE_SERVICES_TYPES[$serviceName];

  $service = new Factory($factoryServiceName, $SERVICE_URL, $_GET, $SERVICE_NAMES[$serviceName]);
  $response = $service->CallService();
  if($response != null && $response != "")
  {
  	$Container->Results = $response;
  }
  else
  {
  	$Container->Status = 400;
  	$Container->Error = "Bad Request"; 
  }
  header('Content-Type: application/json');
  echo json_encode($Container);
}

?>