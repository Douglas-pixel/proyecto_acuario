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
      <p>Douglas Navarrete future web developer</P>
    </footer>  

</body>
</html>