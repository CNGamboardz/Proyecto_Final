<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chiapas Oculto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="view/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="view/img/logo_chiapasoculto.png" alt="Logo Chiapas Oculto" class="logo">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">INICIO</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?u=tours">TOURS</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?u=paquetes">PAQUETES</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?u=contacto">CONTACTO</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?u=carrito">
                            <img src="view/img/Carritocompras.png" width="24" height="24" alt="Carrito"> CARRITO
                        </a>
                    </li>
                </ul>
                <!-- Sección a la derecha -->
                <ul class="navbar-nav align-items-end">
                    <?php if (isset($_SESSION['usuario_nombre'], $_SESSION['usuario_apellido'])): ?>
                        <li class="nav-item text-start" style="white-space: normal; text-align: center;">
                            <span class="nav-link">
                                <strong>BIENVENIDO:</strong><br>
                                <?php echo htmlspecialchars($_SESSION['usuario_nombre'] . ' ' . $_SESSION['usuario_apellido']); ?>
                                <br>
                                <a class="nav-link21" href="index.php?u=logout">CERRAR SESIÓN</a>
                            </span>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?u=login">
                                <img src="view/img/IconUsuario.png" width="24" height="24" alt="Icono Usuario"> LOGIN/REGISTER
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>





<style>
/* Asegúrate de tener algo de margen superior para no cubrir el contenido */
body {
    padding-top: 80px; /* Ajusta según la altura de la navbar */
    
}

.navbar {
    background-color: white; /* Fondo blanco */
    transition: background-color 0.3s ease; /* Transición suave al cambiar el fondo */
    padding: 55px;
}


.logo {
    height: 150px; /* Ajusta la altura del logo */
    width: 100%; /* Mantiene la proporción */
    margin-top: 30px;
}

.navbar.scrolled {
    background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco con un poco de transparencia al hacer scroll */
}

.navbar-nav .nav-link {
    font-size: 1.1rem; /* Tamaño del texto */
    padding: 15px 30px; /* Espacio alrededor de los enlaces */
}

.navbar-light .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' d='M5 7h20M5 15h20M5 23h20'/%3E%3C/svg%3E");
}

/* Responsividad */
@media (max-width: 768px) {
    .logo {
        height: 50px; /* Ajuste de altura en dispositivos más pequeños */
    }

    .navbar-nav .nav-link {
        font-size: 1rem; /* Tamaño de fuente más pequeño en pantallas más pequeñas */
    }
}

</style>

<script>
    // Cambiar el fondo de la navbar al hacer scroll
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 0) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>
