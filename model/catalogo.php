<?php
class catalogo
{
    public function MostrarDatos($id_categoria)
    {
        include_once('database_connection.php');
        $cnn = new Conexion();
        $consulta = "SELECT * FROM catalogos WHERE id_categoria = :id_categoria";
        $resultado = $cnn->prepare($consulta);
        $resultado->bindParam(':id_categoria', $id_categoria, PDO::PARAM_STR);
        $resultado->execute();

        $catalogo = $resultado->fetchAll(PDO::FETCH_ASSOC);
        return $catalogo;
    }

    public function MostrarDatos2($id_catalogo)
    {
        include_once('database_connection.php');
        $cnn = new Conexion();
        $consulta = "SELECT * FROM catalogos WHERE id_catalogo = :id_catalogo";
        $resultado = $cnn->prepare($consulta);
        $resultado->bindParam(':id_catalogo', $id_catalogo, PDO::PARAM_STR);
        $resultado->execute();

        $catalogo = $resultado->fetchAll(PDO::FETCH_ASSOC);
        return $catalogo;
    }

    public function MostrarDatos3()
    {
        include_once('database_connection.php');
        $cnn = new Conexion();
        $consulta = "SELECT * FROM catalogos";
        $resultado = $cnn->prepare($consulta);
        $resultado->execute();

        $catalogo = $resultado->fetchAll(PDO::FETCH_ASSOC);
        return $catalogo;
    }
    
public function MostrarPaquetesPorOperadora($id_operadoras)
{
    $cnn = new Conexion(); // esto YA es un objeto PDO
    $query = "SELECT * FROM catalogos WHERE id_operadoras = :id_operadoras AND id_categoria = 2";
    $stmt = $cnn->prepare($query); // ✅ aquí usas $cnn, NO $pdo
    $stmt->bindParam(':id_operadoras', $id_operadoras, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function MostrarToursPorOperadora($id_operadoras)
{
    $cnn = new Conexion();
    $query = "SELECT * FROM catalogos WHERE id_operadoras = :id_operadoras AND id_categoria = 1";
    $stmt = $cnn->prepare($query);
    $stmt->bindParam(':id_operadoras', $id_operadoras, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}



}