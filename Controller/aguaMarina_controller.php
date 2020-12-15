<?php
    $usuario_valido=false;
    include_once("../Model/filtros_model.php");
    if(isset($_POST["enviar"])){
        $input_of_User=ucwords(strtolower($_POST["user"]));
        $input_of_Password=$_POST["password"];

        $filtrado= new Conexion();
        $cuantos_hay= $filtrado->Conectar($input_of_User, $input_of_Password);
        if($cuantos_hay!=0){
            $usuario_valido=true;
            setcookie("nombre_usuario", $input_of_User, time()+120);
        }else{
            echo "El nombre de usuario y/o contraseña incorrectos  ";
        }
    }


    
    /*
    
    $cadena = $_SERVER['PHP_SELF'];
    $array = explode("/", $cadena);
    echo $array[2];*/
// necesito las variables del post

if(isset($_COOKIE["nombre_usuario"])){
    echo "Has iniciado sesión como, " . $_COOKIE['nombre_usuario'];
}else if($usuario_valido==true){
    echo "Has iniciado sesión como, $input_of_User";
}else{
    include_once("../View/formulario.php");
}
include_once("../View/aguaMarina_view.php");
    
?>