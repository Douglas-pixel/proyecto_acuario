<?php
    class Conexion{
        function Conectar($usuario, $password){
            $this->base= new PDO("mysql:host=localhost; dbname=chalet", "root", "");
            $this->base->exec("SET CHARSET UTF8");
            $sql="SELECT * from usuario_pass where usuarios=:user and contra=:pass";
            $this->resultado=$this->base->prepare($sql);
            $this->resultado->bindValue(":user", $usuario);
            $this->resultado->bindValue(":pass", $password);
            $this->resultado->execute();
            $this->comprobar = $this->resultado->rowCount();

            return $this->comprobar;
        }
        function printComentarios($seccion){
            $this->base= new PDO("mysql:host=localhost; dbname=chalet", "root", "");
            $this->base->exec("SET CHARSET UTF8");
            $sql="select * from comentarios where seccion=:seccion";
            $this->resultado=$this->base->prepare($sql);
            $this->resultado->bindValue(":seccion", $seccion);
            $this->resultado->execute();
            
            return $this->resultado;
        }
    }
?>