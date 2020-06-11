<?php

    $contenido = ("../vista/plantilla.phtml"); 

    if( isset($_REQUEST['enviar']) )
    {

        require("../controlador/ingreso.php");

        if( $nombre == "" || $pass == "" )
        {

    

        }else{

            header('Location: ../vista/principal.phtml');

        }

        

    }

    require_once("../vista/plantilla.phtml");

?>