<?php
    class Producto extends Conectar{ // Extiende de la clase padre Conectar
        public function get_producto(){
            $conectar= parent::conexion(); // Usa el método conexion de la clase padre
            parent::set_names();
            $sql = "SELECT tm_producto.prod_id, tm_producto.cat_id, tm_producto.prod_nom, tm_producto.prod_desc, tm_categoria.cat_nom FROM tm_producto INNER JOIN tm_categoria on tm_producto.cat_id = tm_categoria.cat_id WHERE tm_producto.est=1;";
            $sql = $conectar->prepare($sql);
            $sql->execute(); // Ejecutar query
            return $resultado=$sql->fetchAll();
        }

        public function get_producto_x_id($prod_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_producto WHERE prod_id = ?"; // prod_id proporcionado en parametro de la funcion
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$prod_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function delete_producto($prod_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="UPDATE tm_producto
                SET
                    est=0,
                    fech_elim=now()
                WHERE
                    prod_id = ?"; // prod_id proporcionado en parámetro de la funcion
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$prod_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function insert_producto($cat_id, $prod_nom, $prod_desc){
            $conectar= parent::conexion();
            parent::set_names();
            // Funcion now() captura la fecha y hora del sistema
            $sql="INSERT INTO tm_producto (prod_id, cat_id, prod_nom, prod_desc, fech_crea, fech_modi, fech_elim, est) VALUES (NULL, ?, ?, ?, now(), NULL, NULL, 1);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$cat_id);
            $sql->bindValue(2,$prod_nom);
            $sql->bindValue(3,$prod_desc);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function update_producto($prod_id, $cat_id, $prod_nom, $prod_desc){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="UPDATE tm_producto
                SET
                    cat_id=?,
                    prod_nom=?,
                    prod_desc=?,
                    fech_modi=now()
                WHERE
                    prod_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$cat_id);
            $sql->bindValue(2,$prod_nom);
            $sql->bindValue(3,$prod_desc);
            $sql->bindValue(4,$prod_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
?>