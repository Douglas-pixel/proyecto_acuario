<?php
include_once("../Model/filtros_model.php");
$filtrado= new Conexion();
$usuario_valido=false;
    
    if(isset($_POST["enviar"])){
        $input_of_User=ucwords(strtolower($_POST["user"]));
        $input_of_Password=$_POST["password"];

        
        $cuantos_hay= $filtrado->Conectar($input_of_User, $input_of_Password);//determina si existe esa combinacion de usuario y contraseña
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

include_once("../View/filtros_view.php");

$nombreCookie="Diego";//falta convertilo en cookie
//$tabla=$comando->fetch(PDO::FETCH_ASSOC);
$resul=$filtrado->printComentarios("filtrado");//esto es un objeto de un objeto que tiene la funcion fetch(pdo::fetch_assoc)



while($tabla=$resul->fetch(PDO::FETCH_ASSOC)){//variable resultado definida en filtros_model.php
    echo $tabla["ID"] ." ". $tabla["nombre"] . " " . $tabla["comentario"] . "<br>";
    if ($nombreCookie==$tabla["nombre"]){
        echo "editar" .  "    borrar <br><br>" ;

    }

} 





?>
