<?php
    class Categoria extends Conectar{ // Extiende de la clase padre Conectar
        // Obtener todos los registros de la tabla categoria
        public function get_categoria(){
            $conectar= parent::conexion(); // Usa el método conexion de la clase padre
            parent::set_names();
            $sql="SELECT * FROM tm_categoria WHERE est=1";
            $sql=$conectar->prepare($sql);
            $sql->execute(); // Ejecutar query
            return $resultado=$sql->fetchAll();
        }

    }
?>