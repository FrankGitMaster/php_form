<?php

if(isset($_POST["send"])){
    
    $usuario = $_POST["name"];
    $edad = $_POST["age"];
    
    if($usuario == "Frank"){
        echo "Bienvenido $usuario";
    }
    else{
        echo "No puedes ingresar nene";
    }
}

?>