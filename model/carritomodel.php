<?php
class CarritoModel {
    // Agregar producto al carrito
    public function agregarAlCarrito($id_usuario, $id_catalogo, $cantidad) {
        // Verificar si el producto ya está en el carrito
        $consulta = "SELECT cantidad FROM carrito WHERE id_usuario = :id_usuario AND id_catalogo = :id_catalogo";
        $stmt = $this->cnn->prepare($consulta);
        $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
        $stmt->bindParam(':id_catalogo', $id_catalogo, PDO::PARAM_INT);
        $stmt->execute();
        $producto = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($producto) {
            // Si ya está en el carrito, actualiza la cantidad
            $nuevaCantidad = $producto['cantidad'] + $cantidad;
            $update = "UPDATE carrito SET cantidad = :cantidad WHERE id_usuario = :id_usuario AND id_catalogo = :id_catalogo";
            $stmt = $this->db->prepare($update);
            $stmt->bindParam(':cantidad', $nuevaCantidad, PDO::PARAM_INT);
        } else {
            // Si no está, agrega el producto
            $insert = "INSERT INTO carrito (id_usuario, id_catalogo, cantidad) VALUES (:id_usuario, :id_catalogo, :cantidad)";
            $stmt = $this->db->prepare($insert);
            $stmt->bindParam(':cantidad', $cantidad, PDO::PARAM_INT);
        }

        $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
        $stmt->bindParam(':id_catalogo', $id_catalogo, PDO::PARAM_INT);
        return $stmt->execute();
    }

    // Obtener el contenido del carrito
    public function obtenerCarrito($id_usuario) {
        $consulta = "SELECT c.id_carrito, c.id_catalogo, c.cantidad, p.Nombre, p.Precio
                     FROM carrito c
                     INNER JOIN catalogos p ON c.id_catalogo = p.id_catalogo
                     WHERE c.id_usuario = :id_usuario";
        $stmt = $this->db->prepare($consulta);
        $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Eliminar un producto del carrito
    public function eliminarDelCarrito($id_carrito) {
        $consulta = "DELETE FROM carrito WHERE id_carrito = :id_carrito";
        $stmt = $this->db->prepare($consulta);
        $stmt->bindParam(':id_carrito', $id_carrito, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
?>
