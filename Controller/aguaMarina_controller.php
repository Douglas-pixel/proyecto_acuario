<?php
include_once("../Model/filtros_model.php");
$seccion= new Conexion();
$usuario_valido=false;
$identidad_usuario="";
$pagina="aguamarina";
    
    if(isset($_POST["enviar"])){
        $input_of_User=ucwords(strtolower($_POST["user"]));
        $input_of_Password=$_POST["password"];
        
        $cuantos_hay= $seccion->Conectar($input_of_User, $input_of_Password);//determina si existe esa combinacion de usuario y contraseña
        if($cuantos_hay!=0){
            $usuario_valido=true;
            setcookie("nombre_usuario", $input_of_User, time()+120);
            $identidad_usuario=$input_of_User;
        }else{
            echo "El nombre de usuario y/o contraseña incorrectos  ";
        }
    }
 //------------------------------------------------------------   
 if(isset($_COOKIE["nombre_usuario"])){//para que la variable $identidad_usuario siempre tenga un valor diferente de vacio
    $identidad_usuario=$_COOKIE["nombre_usuario"];
 }  

    //-------------------------------codigo para CREATE----------------------------------------
    
    if(isset($_POST["cr"])){
        $nombre=$identidad_usuario;
        $comentario=$_POST["Comentario"];
        $fecha=date('Y-m-d');
        $seccion->createComentario($pagina, $nombre, $comentario, $fecha);

    }

    

// ------------------------------------Notificar si estás logueado

if($identidad_usuario!=""){
    echo "Has iniciado sesión como, " . $identidad_usuario;
}else{
    include_once("../View/formulario.php");
}
include_once("../View/aguaMarina_view.php");
    
?>