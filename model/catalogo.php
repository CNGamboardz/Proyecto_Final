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

    public function MostrarDatos2($id_catalogo){
        include_once('database_connection.php');
        $cnn = new Conexion();
        $consulta = "SELECT * FROM catalogos WHERE id_catalogo = :id_catalogo";
        $resultado = $cnn->prepare($consulta);
        $resultado->bindParam(':id_catalogo', $id_catalogo, PDO::PARAM_STR);
        $resultado->execute();

        $catalogo = $resultado->fetchAll(PDO::FETCH_ASSOC);
        return $catalogo;
}

public function MostrarDatos3(){
    include_once('database_connection.php');
    $cnn = new Conexion();
    $consulta = "SELECT * FROM catalogos";
    $resultado = $cnn->prepare($consulta);
    $resultado->execute();

    $catalogo = $resultado->fetchAll(PDO::FETCH_ASSOC);
    return $catalogo;
}

    }
?>