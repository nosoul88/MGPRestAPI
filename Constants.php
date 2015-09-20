<?php
$SERVICE_URL = "http://gisdesa.mardelplata.gob.ar/opendata/ws.php?wsdl";
$TOKEN = "wwfe345gQ3ed5T67g4Dase45F6fer";
$SERVICE_NAMES = array
(
    'AreasProgramaticas' => "areas_programaticas",
    'Barrios' => "barrios",
    'Bibliotecas' => "bibliotecas",
    'CentrosSalud' => "centros_de_salud",
    'Clubs' => "clubs",
    'Comisarias' => "comisarias",
    'EducacionPrivada' => "educacion_privada",
    'EducacionPublicaMunicipal' => "educacion_publica_municipal",
    'EducacionPublicaProvincial' => "educacion_publica_provincial",
    'InformacionTuristica' => "informacion_turistica",
    'LineasColectivos' => "lineas",
    'Museos' => "museos",
    'PuntosCargaTarjetasColectivo' => "puntos_carga_tarjetas",
    'ServiciosSociales' => "servicios_sociales",
    'PuestoMedido' => "latlong_puestomedido",
    'GeolocalizaBarrios' => "latlong_barrio",
    'ComisariaCercana' => "comisaria_cercana",  
    'AreaEstacionaminetomedido' => "latlong_esestacionaminetomedido", 
    'GeolocalizaPoligonoCuadricula' => "latlong_poligonocuadricula",
    'GeolocalizaTelefonoMovilPolicial' => "movilpolicial_lat_lng",   
    'GeolocalizaWifiMgp' => "wifi_mgp",
    'PlayasCercanas' => "playas",
    'Callejero' => "callejero_mgp",
    'Geocoder' => "callealtura_coordenada",
    'ReverseGeocoder' => "coordenada_calleaaltura",
    'CuadriculaPoligono' => "numerocuadricula_poligonocuadricula",
    'FreaccionPoligono' => "numerofraccion_poligonofraccion",
    'RecorridoLinea' => "recorrido_linea"  
);

$BASE_SERVICES_TYPES = array
(
    'AreasProgramaticas' => "Base",
    'Barrios' => "Base",
    'CentrosSalud' => "Base",
    'Bibliotecas' => "Base",
    'Clubs' => "Base",
    'Comisarias' => "Base",
    'EducacionPrivada' => "Base",
    'EducacionPublicaMunicipal' => "Base",
    'EducacionPublicaProvincial' => "Base",
    'InformacionTuristica' => "Base",
    'LineasColectivos' => "Base",
    'Museos' => "Base",
    'PuntosCargaTarjetasColectivo' => "Base",
    'ServiciosSociales' => "Base",
    'PuestoMedido' => "Geographic",
    'GeolocalizaBarrios' => "Geographic",
    'ComisariaCercana' => "Geographic", 
    'AreaEstacionaminetomedido' => "Geographic", 
    'GeolocalizaPoligonoCuadricula' => "Geographic", 
    'GeolocalizaTelefonoMovilPolicial' => "Geographic", 
    'GeolocalizaWifiMgp' => "Geographic",
    'PlayasCercanas' => "Geographic",
    );
?>