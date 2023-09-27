<?php
    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try{
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=crud2","root","");
                return $conectar;
            }catch(Exception $e){
                print "¡Error BD!: " . $e->getMessage() . "<br/>";
                die(); // Terminar conexion
            }
        }

        public function set_names(){
            // Encoding
			return $this->dbh->query("SET NAMES 'utf8'");
        }

    }
?>