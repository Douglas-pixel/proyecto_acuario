<footer>
           
           <?php
       
       //----------------------------------------READ ALL WRITTEN COMMENTS---------------------------------------------
           $resul=$seccion->printComentarios($pagina);//esto es un objeto de un objeto que tiene la funcion fetch(pdo::fetch_assoc)
       
       
           while($tabla=$resul->fetch(PDO::FETCH_ASSOC)){//variable resultado definida en filtros_model.php
               echo $tabla["nombre"] . ": " . $tabla["comentario"] . "<br>";
       
       
           if (isset($_COOKIE["nombre_usuario"])  ||  $usuario_valido==true){
               if($identidad_usuario==$tabla["nombre"]){
           //--------------------------------------BUTTON TO ERASE COMMENT----------------------------------------------?>
         
                   <a href="borrar_comentario.php?
                   pag_origen=<?php echo $_SERVER['PHP_SELF']?> & 
                   cookie_name=<?php echo $identidad_usuario?> & 
                   id=<?php echo $tabla["ID"]?> ">
                   <input type='button' name='del' id='del' value='Borrar'
                   ></a> 
                   <br>
           <!------------------------------------BUTTON TO EDIT COMMENT----------------------------------------------------->   
                    <a href="editComment.php?
                   pag_origen=<?php echo $_SERVER['PHP_SELF']?> &  
                   id=<?php echo $tabla["ID"]?>  &  
                   identidad_usuario=<?php echo $identidad_usuario?> ">
                   <input type='button' name='del' id='del' value='Editar'
                   ></a> 
                   <br>
         <?php  } } } //-------------------------BOX TO CREATE A COMMENT-------------------------------------------------
        ?> 
        <?php if($identidad_usuario!=""){
             //ciere brusco de etiqueta PHP?>
           <form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
           <table>
             <td><?php echo "publicar como: " . $identidad_usuario;?></td>     
             <td><textarea placeholder="comentario" name="Comentario"></textarea></td>
             <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>
           </table>
           </form>    
          
           </footer>
       <?php } ?>    