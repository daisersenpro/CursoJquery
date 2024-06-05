<?php
    if($_POST){
        echo "Se han enviado los datos con metodo POST".$_POST["tarea"];
    }else{
        echo "Se han enviado los datos con metodo GET".$_GET["tarea"];
    }


?>