<?php
    class Conexion extends PDO{
        private $hostBD='localhost';
        private $nombreBD='u776219506_chiapasoculto';
        private $usuarioBD='u776219506_root';
        private $passwordBD='Equip@3_webEquip@3_web';
        public function __construct(){
            try {
                parent::__construct('mysql:host='.$this->hostBD.';dbname='.$this->nombreBD.';charset=utf8',$this->usuarioBD,$this->passwordBD,
            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            } catch (Exception $e) {
                exit;
            }
            
        }
    }
?>