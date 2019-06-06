<?php

    var_dump($GLOBALS);//exit;

    var_dump($_SERVER);//exit;
    var_dump($_POST);

/*
    foreach ($_GET as $key => $value) {
        echo $key . " => " . $value . " <br>";
    }
    */
    //echo $_GET["nombre"];

    foreach ($_POST as $key => $value) {
        echo $key . " => " . $value . " <br>";
    }

    foreach (getallheaders() as $nombre => $valor) {
        echo "$nombre: $valor <br>";
    }


    

?>