<?php
    class Connect{

        private $server = "localhost";
        private $user = "root";
        private $pass = "";
        private $connection;

        public function __construct(){
            try {
                $this->connection = new PDO("mysql:host=$this->server;dbname=album_db", $this->user, $this->pass);

                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch(PDOException $error){
                return "Connection Fail".$error;
            }
            
        }

        /* Ejecutar cualquier instruccion SQL */
        public function execute($sql){

            /* Ejecutar SQL */
            $this->connection->exec($sql);

            /* Retorna el id del ultimo objeto insertado */
            return $this->connection->lastInsertId();
        }

        public function query($sql){
            $sentence = $this->connection->prepare($sql);
            $sentence->execute();

            return $sentence->fetchAll();

        }



    }

?>