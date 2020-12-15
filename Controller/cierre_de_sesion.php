<?PHP
    $variable=$_GET["pag_origen"];
    setcookie("nombre_usuario", $input_of_User, time()-1 );
    header("Location:$variable");//si te deslogueas no perder la pagina en donde estás
   
?>