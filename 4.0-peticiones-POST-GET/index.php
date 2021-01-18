<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <div class="row">
    <div class="form">
      <form action="recibir_post.php" id="form_session" method="post">
        <div class="mb-4 text-center">
        <h2>Iniciar Sesión</h2>
        </div>
        <div class="mb-3">
          <label for="correo" class="form-label">Correo</label>
          <input type="email" name="usuario" class="form-control" id="correo" placeholder="name@example.com" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña:</label>
          <input type="password" name="contrasena" class="form-control" id="password" placeholder="********" required>
        </div>
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </div>
        <div class="mt-3 text-center">
          <h4>
            <a href="recibir_get.php?tipo_usuario=nuevo&navegador=chrome">Crear cuenta</a>
          </h4>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>