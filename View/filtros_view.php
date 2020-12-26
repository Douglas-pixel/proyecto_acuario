<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <link rel="stylesheet" type="text/css" href="../View/Style/estilo.css">
</head>
<body>
<?php
if($identidad_usuario!=""){?><!--poniendo de esta manaera toda rara el condiconal, podemos inyectar código html -->
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
                <h1>El filtrado</h1>
                <p>
                    Para el correcto mantenimiento de un acuario marino es primordial que el agua sea en todo momento de 
                     excelente calidad. Cualquier alteración físico-química del agua provoca una modificación de las 
                     condicionesfísicas de los habiantes del acuario, cuyas consecuencias serán un débil desarrollo, renuencia 
                     a alimentarse, sensibilidad adquirida a las enfermedades parasitarias e incluso una muda en el caso de los
                     crústaeos. La filtración del agua es pues la clave del éxito.
                </p>

                <h2>El filtrado bajo arena</h2>
                <p>
                    de bajo precio, el filtro de arena se comercializa en  en forma  de pequeñas parrillas o placas yuxtapuestas, 
                    cubren toda la superficie poisble del fondo del recipiente.Se recomienda instalar una chimenea por cada 100 litros, 
                    es decir, para un acuario de 400 litros, se instalarían cuatro.
                </p>
                <p>
                    El efecto colador de la arena es un modo económico y eficaz de concebir la filtración en la 
                    acuarofilia marina. Este sistema mantiene el agua límpida y asegura una propiedades fisíco-químicas 
                    constantes. El equilibrio biológico es estable.
                </p>
            </article>         
    </section>
    <?php
    if($identidad_usuario!=""){
        include_once("../Controller/calculadora.php");
    }else{
        echo "calculadora solo para usuarios registrados";
    }
    include_once("../View/CRUD/crud.php"); 
?>



</body>
</html>    