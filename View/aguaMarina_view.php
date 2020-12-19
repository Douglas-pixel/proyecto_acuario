<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <link rel="stylesheet" type="text/css" href="../View/Style/estilo.css">
</head>
<body>
<?php
if(isset($_COOKIE["nombre_usuario"])||$usuario_valido==true){?><!-- esto sirve para enviar la info necesaria a la pag de cierre de sesión, y no perder la pagina que estabas viendo -->
     <a href="cierre_de_sesion.php?pag_origen=<?php echo $_SERVER['PHP_SELF']?>">Cierre de sesión</a>
<?php     
}//poniendo de esta manaera toda rara el condiconal, podemos inyectar código html 
?>    
    
  </table>
    <header>
        <nav>
            <ul>
                <li><a href="filtros_controller.php">El filtrado</a></li>
                <li><a href="aguaMarina_controller.php">Agua marina</a></li><!--para enviar la direccion y que la variable de cierre de sesión sea válida-->
                <li><a href="#">Instances</a></li>
                <li><a href="#">Luna</a></li>
                <li><a href="#">Stigma Combination</a></li>
            </ul>
        </nav>
    </header>
    <br/>
    <section class="main">
        <section class = "articles">
            <article>
                <h1>El agua</h1>
                <p>la principal dificultad de la acuariofilia marina radica, por una parte, en  "fabricar" 
                    correctamente agua de mar, y por otra, en mantener intactas sus propiedades durante largos 
                    años.
                    Ante el acuariófilo se abren tres posibilidades. Puedo dosificar y mezclar él mismo los 
                    ingredientes necesarios; puede también buscar directamente agua de mar; por último, puede 
                    adquirir sales sintéticas, perfectamente dosificadas, que no tendrá más que disolver en 
                    agua dulce. No es necesario decir que la última es la más frecuentemente usada. El uso de
                     agua de mar es interesante si uno vive cerca de la costa, y su esa costa está libre de 
                     contaminación. La primera solución queda reservada a bioquímicos competentes...

                    El agua dulce que se emplee para realizar la mezcla debe ser aireada un tiempo antes de 
                    su utilización, como lo será el agua de mar una vez "fabricada". La aireación y 
                    la agitación intensa durante varios días son las mejores garantías para el éxito futuro.
                 </p>

            </article>
    </section>
    <aside>
        <h2>Calculadora de algo</h2>
        <ul>
            <li><a href= "#"></a></li>
            <li><a href= "#"></a></li>
            <li><a href= "#"></a></li>
            <li><a href= "#"></a></li>
        </ul>
    </aside>
    <footer>
    <?php
//----------------------------------------SECCIÓN DE COMENTARIOS---------------------------------------------
    $resul=$aguaMarina->printComentarios("aguamarina");//esto es un objeto de un objeto que tiene la funcion fetch(pdo::fetch_assoc)


    while($tabla=$resul->fetch(PDO::FETCH_ASSOC)){//variable resultado definida en filtros_model.php
    echo $tabla["ID"] ." ". $tabla["nombre"] . " " . $tabla["comentario"] . "<br>";
    if ($nombreCookie==$tabla["nombre"]){ ?>
 
            <a href="borrar_comentario.php?pag_origen=<?php echo $_SERVER['PHP_SELF']?> & 
            cookie_name=<?php echo $nombreCookie //aqui paso por medio del link las variables necesarias para borrar el comentario en otro archivo?>">
        <input type='button' name='del' id='del' value='Borrar'
        ></a> 
        <br>

  <?php  } //aqui reanudo la etiqueta abruptamente cerrada para meter html 

} 
 //-------------------maquetado para nuevos comentarios------------------------------------------------?> 
    
    <form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <table>
      <td><input placeholder="seccion" type='text' name='Seccion' size='10' class='centrado'></td>
      <td><input placeholder="nombre" type='text' name='Nombre' size='10' class='centrado'></td>
      <td><textarea placeholder="comentario" name="Comentario"></textarea></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>
    </table>
    </form>    
    
    </footer>

</body>
</html>