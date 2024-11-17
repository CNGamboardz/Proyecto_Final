<?php
    Class catalogo{
        public function MostrarDatos($id_categoria){
            include_once('database_connection.php');
            $cnn = new Conexion();
            $consulta = "SELECT * FROM catalogos WHERE id_categoria = :id_categoria";
            $resultado = $cnn->prepare($consulta);
            $resultado->bindParam(':id_categoria', $id_categoria, PDO::PARAM_STR);
            $resultado->execute();
    
            $catalogo = $resultado->fetchAll(PDO::FETCH_ASSOC);
            return $catalogo;
    }
}
?>