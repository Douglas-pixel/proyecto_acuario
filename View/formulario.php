<h3>Login genérico pero bonito</h3>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <table border="0" align="center">
    <tr>
      <td>Nombre usuario</td>
      <td><label for="user"></label>
      <input type="text" name="user" id="user"></td>
    </tr>
    <tr>
      <td>Contraseña</td>
      <td><label for="password"></label>
      <input type="password" name="password" id="password"></td>
    </tr>
    <!--<tr>
      <td>recordar en este equipo</td>
      <td><input type="checkbox" name="recordar" id="recordar"></td>
    </tr>
    <tr>-->
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
     <!--<td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>-->
    </tr> 
</form>