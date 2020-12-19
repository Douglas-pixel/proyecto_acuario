<?php
include_once("../Model/filtros_model.php");
$aguaMarina= new Conexion();
$usuario_valido=false;
$nombreCookie="Romero";
    if(isset($_POST["enviar"])){
        $input_of_User=ucwords(strtolower($_POST["user"]));
        $input_of_Password=$_POST["password"];

        $cuantos_hay= $aguaMarina->Conectar($input_of_User, $input_of_Password);
        if($cuantos_hay!=0){
            $usuario_valido=true;
            setcookie("nombre_usuario", $input_of_User, time()+120);
        }else{
            echo "El nombre de usuario y/o contraseña incorrectos  ";
        }
    }
//-------------------------------codigo para CREATE----------------------------------------
    if(isset($_POST["cr"])){
        $seccion=$_POST["Seccion"];
        $nombre=$_POST["Nombre"];
        $comentario=$_POST["Comentario"];
        $aguaMarina->createComentario($seccion, $nombre, $comentario);
    
    }
    
        //----------------------------------------------------------------------------------------
    


    
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