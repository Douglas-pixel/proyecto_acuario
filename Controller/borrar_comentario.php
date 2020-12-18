<?PHP
    include_once("../Model/filtros_model.php");
    $variable=$_GET["pag_origen"];
    $cookie_name=$_GET["cookie_name"];
    $objeto_temporal= new Conexion();
    
    $objeto_temporal->eliminate($cookie_name);
    
    //si te deslogueas no perder la pagina en donde estás
    
    header("Location:$variable");
?>