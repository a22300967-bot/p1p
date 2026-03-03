<?php

$xml = simplexml_load_file("contactos.xml");

foreach($xml->contacto as $key => $c){
    if($c->telefono == $_GET['telefono']){
        unset($xml->contacto[$key]);
        break;
    }
}

$xml->asXML("contactos.xml");

header("Location: index.php");
?>