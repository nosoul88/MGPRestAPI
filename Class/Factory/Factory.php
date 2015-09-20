<?php
class Factory
{
 var $ServiceUrl = "";
 var $RequestParams = "";
 var $ServiceName = "";
 var $MethodName = "";
 var $GetParams;

 public function __construct($MethodName, $Url, $Parameters, $ServiceName) 
 {
  $this->ServiceUrl = $Url;
  $this->ServiceName = $ServiceName;
  $this->GetParams = $Parameters;
  $this->MethodName = $MethodName;
 }

 public function CallService()
 {
    if(method_exists(Factory, $this->MethodName))
    {
        $method = $this->MethodName;
        if(is_callable("Factory::".$method))
         return Factory::$method();
    }

   return null;
 }

 public function Base()
 {
    $token = $this->GetParams["token"];
  	$this->RequestParams = array(
    'token' => $token);

    return $this->GetResponse();
 }

  function Geographic() 
 {
    $token = $this->GetParams["token"];

 	  $this->RequestParams = array(
    'latitud' => $this->GetParams["param1"],
    'longitud' => $this->GetParams["param2"]
    );
    if(isset($this->GetParams["param3"]) && isset($this->GetParams["param4"]))
    {
     $this->RequestParams["distanciamaxima"] = $this->GetParams["param3"];
     $this->RequestParams["cantidadmaxima"] = $this->GetParams["param4"];
    }

    $this->RequestParams["token"] = $token;   
    
    return $this->GetResponse();
 }

  function Geocoder() 
 {
    $token = $this->GetParams["token"];
    $calle = $this->GetParams["param1"];
    $altura = $this->GetParams["param2"];

 	$this->RequestParams = array(
    'codigocalle' => $calle,
    'altura' => $altura,
    'token' => $token);

    return $this->GetResponse();
 }
 
  function Callejero() 
 {
    $token = $this->GetParams["token"];
    $calle = $this->GetParams["param1"];
    
 	$this->RequestParams = array(
    'nombre_calle' => $calle,
    'token' => $token);

     return $this->GetResponse();
 }

  function ReverseGeocoder() 
 {
    $token = $this->GetParams["token"];
    $lat = $this->GetParams["param1"];
    $lng = $this->GetParams["param2"];
    
 	$this->RequestParams = array(
    'latitud' => $lat,
    'longitud' => $lng,
    'token' => $token);

    return $this->GetResponse();
 }

  function CuadriculaPoligono() 
 {
    $token = $this->GetParams["token"];

  	$this->RequestParams = array(
    'numero_cuadricula' => $this->GetParams["param1"],
    'token' => $token
    ); 

    return $this->GetResponse();
 }

 function FreaccionPoligono() 
 {
    $token = $this->GetParams["token"];

    $this->RequestParams = array(
    'numero_fraccion' => $this->GetParams["param1"],
    'token' => $token
    ); 

     return $this->GetResponse(); 
 }

  function RecorridoLinea() 
 {
    $token = $this->GetParams["token"];

    $this->RequestParams = array(
    'linea' => $this->GetParams["param1"],
    'token' => $token
    ); 

     return $this->GetResponse(); 
 }


  function GetResponse()
 {
   $client = new SoapClient($this->ServiceUrl);
   $response = $client->__call($this->ServiceName ,$this->RequestParams);
   return $response;
 }
 
}
?>