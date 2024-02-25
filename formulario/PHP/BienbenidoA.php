<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SACADN - Menú</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        
        <a href="#" class="enlace">
            <img src="../Sacadn.ico" alt="SACADN Logo" class="logo">
        </a>

        <ul class="nav-links">
            <li><a class="active" href="#">Inicio</a></li>
            <li><a href="#">Notas</a></li>
            <li><a href="#">Estudiantes</a></li>
            <li><a href="#">Profesores</a></li> 
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>
    <!-- Aquí puedes agregar el resto del contenido de la página -->
    <div class="container">
        <div class="row mt-3 justify-content-md-center">
            <div class="col-md-6">
                <h1>Bienvenido</h1>
                <p>¡Gracias por iniciar sesión!</p>
            </div>
        </div>
        <div class="row mt-3 justify-content-md-center">
            <form action="" method="POST">
                <button type="submit" class="btn btn-primary btn-block" name="cerrarSesion">Cerrar Sesión</button>
            </form>
        </div>
    </div>

    </body>
</html>
