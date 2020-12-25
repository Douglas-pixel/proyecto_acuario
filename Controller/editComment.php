<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../View/Style/estilo.css">
    <title>Document</title>
</head>
<body>
<?php
    include_once("../Model/filtros_model.php");
  
    $objeto_temporal= new Conexion();



    if(!isset($_POST['edit_button'])){
        $identidad_usuario=$_GET["identidad_usuario"];
        $id_comentario=$_GET["id"];
        $pag_origen=$_GET["pag_origen"];  
        $resul=$objeto_temporal->printIndividualComment($id_comentario);

        $fila=$resul->fetch(PDO::FETCH_ASSOC);


    }else{
        $pag_origen=$_POST["pag_origen"];
        $id_comentario=$_POST["id"];
        $new_comment=$_POST["Comentario"];
        $objeto_temporal->editComment($id_comentario, $new_comment);
        
        header("Location:$pag_origen");
        echo "tambien este se imprime";

    }

?>
    <form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <table>
      <td> <input type="hidden" name="pag_origen" id="pag_origen" value ="<?php echo $pag_origen?>"></td>   
      <td> <input type="hidden" name="id" id="id" value ="<?php echo $id_comentario?>"></td>  
      <td><?php echo "publicar como: " . $identidad_usuario;?></td>     
      <td><textarea  name="Comentario"><?php  echo $fila["comentario"];?></textarea></td>
      <td class='bot'><input type='submit' name='edit_button' id='edit_button' value='Editar'></td></tr>
    </table>
    </form>
    
</body>
</html>