<?PHP
    include_once("../Model/filtros_model.php");
    $pag_origen=$_GET["pag_origen"];
    $cookie_name=$_GET["cookie_name"];
    $id=$_GET["id"];
    $objeto_temporal= new Conexion();
    
    $objeto_temporal->eliminate($cookie_name, $id);
    
    //si te deslogueas no perder la pagina en donde estás
    
    header("Location:$pag_origen");
?>