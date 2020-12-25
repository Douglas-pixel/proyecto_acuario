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
        function createComentario($dato1, $dato2, $dato3, $dato4){
            $this->base= new PDO("mysql:host=localhost; dbname=chalet", "root", "");
            $this->base->exec("SET CHARSET UTF8");//despues tengo que hacerlo más optimizado(repetir menos código)
            $sql="INSERT INTO comentarios (seccion, nombre, comentario, fecha) VALUES(:secc, :nom, :com, :fecha)";
            $this->resultado=$this->base->prepare($sql);
            $this->resultado->execute(array(":secc"=>$dato1, ":nom"=>$dato2, ":com"=>$dato3, ":fecha"=>$dato4));
        }
        function editComment($id_comentario, $new_comment){
            $this->base= new PDO("mysql:host=localhost; dbname=chalet", "root", "");
            $this->base->exec("SET CHARSET UTF8");
            $sql="UPDATE comentarios SET comentario=:new_comment WHERE ID=:ID_comentario";
            $this->resultado=$this->base->prepare($sql);
            $this->resultado->bindValue(":new_comment", $new_comment);
            $this->resultado->bindValue(":ID_comentario", $id_comentario);
            $this->resultado->execute();
        }
        function printIndividualComment($id){
            $this->base= new PDO("mysql:host=localhost; dbname=chalet", "root", "");
            $this->base->exec("SET CHARSET UTF8");
            $sql="select * from comentarios where ID=:id";
            $this->resultado=$this->base->prepare($sql);
            $this->resultado->bindValue(":id", $id);
            $this->resultado->execute();
            
            return $this->resultado;
        }
        function eliminate($id){
            $this->base= new PDO("mysql:host=localhost; dbname=chalet", "root", "");
            $this->base->exec("SET CHARSET UTF8");
            $sql="delete from comentarios where ID=:id";
            $this->resultado=$this->base->prepare($sql);
            $this->resultado->bindValue(":id", $id);
            $this->resultado->execute();
        }
    }
?>