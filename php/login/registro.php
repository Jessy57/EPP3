<!DOCTYPE html>
<html>

<head>
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2>Registro de Usuario</h2>
                <form method="post" action="procesar_registro.php">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido:</label>
                        <input type="text" class="form-control" name="apellido" required>
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección:</label>
                        <input type="text" class="form-control" name="direccion" required>
                    </div>
                    <div class="form-group">
                        <label for="numero_telefonico">Número Telefónico:</label>
                        <input type="text" class="form-control" name="numero_telefonico" required>
                    </div>
                    <div class="form-group">
                        <label for="estado_civil">Estado Civil:</label>
                        <select class="form-control" name="estado_civil" required>
                            <option value="soltero">Solterx</option>
                            <option value="casado">Casadx</option>
                            <option value="divorciado">Divorciadx</option>
                            <option value="viudo">Viudx</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="user">Usuario:</label>
                        <input type="text" class="form-control" name="user" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrarse</button>

                    <!-- Botón para volver atrás -->
                    <a href="login.php" class="btn btn-secondary">Volver</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>