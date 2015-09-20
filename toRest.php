<?php
include_once("Constants.php");
include_once("Class/Models/Container.php");
include_once("Class/Factory/Factory.php");
$Container = new Container(200, "");

if($_GET)
{
  if($_GET["token"] && $_GET["token"] == $TOKEN)
  {  
  $serviceName = $_GET["serviceName"];
  $factoryServiceName = $serviceName;

  if(array_key_exists($serviceName, $SERVICE_NAMES))
  {
   if(array_key_exists($serviceName, $BASE_SERVICES_TYPES))
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
 }
 else
 {
    $Container->Status = 404;
    $Container->Error = "Not Found";
 }
}
else
{
    $Container->Status = 401;
    $Container->Error = "Unauthorized";  
}

  header('Content-Type: application/json');
  echo json_encode($Container);
}
die;
?>