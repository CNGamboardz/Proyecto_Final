<?php foreach ($productos as $producto): ?>
<tr>
    <td><?= $producto['Nombre'] ?></td>
    <td><?= $producto['Precio'] ?></td>
    <td><?= $producto['Descripcion'] ?></td>
    <td>
        <?php if ($_SESSION['id_rango'] == 3 && $_SESSION['ID_operadora'] == $producto['id_operadora']): ?>
            <a href="index.php?u=editar&id=<?= $producto['id_catalogo'] ?>" class="btn btn-warning btn-sm">Editar</a>
            <a href="index.php?u=eliminar&id=<?= $producto['id_catalogo'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar?')">Eliminar</a>
        <?php endif; ?>
    </td>
</tr>
<?php endforeach; ?>