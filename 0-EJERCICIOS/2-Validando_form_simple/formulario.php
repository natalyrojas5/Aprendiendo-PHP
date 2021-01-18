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
<div class="container mt-3">
  <div class="row text-center title">
    <h1>Formulario</h1>
  </div>
    <div class="form">
      <form action="formulario.php" method="post" id="formulario">
        <div class="row">

      <?php 

        $usuario = '';
        $correo = '';
        $contrasena = '';
        $pais = '';
        $turno = '';
        $postres = array();

          if(isset($_POST['usuario'])){
            $usuario = $_POST['usuario'];
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];
            $pais = $_POST['pais'];

            $campos = array();

            if(isset($_POST['turno'])){
              $turno = $_POST['turno'];
            }else{
              $turno = '';
            }

            if(isset($_POST['postres'])){
              $postres = $_POST['postres'];
            }else{
              $postres = [];
            }

            if($usuario == ""){
              array_push($campos, "Ingrese su usuario");
            }

            if($correo == ""){
              array_push($campos, "Ingrese su correo");
            }
            
            if(strpos($correo, "@") === false){
              array_push($campos, "Ingrese un correo valido");
            }

            if($contrasena == ""){
              array_push($campos, "Ingrese su contraseña");
            }

            if(strlen($contrasena) < 6){
              array_push($campos, "La contraseña debe tener más de 6 caracteres");
            }

            if(strlen($contrasena) < 6){
              array_push($campos, "La contraseña debe tener más de 6 caracteres");
            }

            if($pais == ""){
              array_push($campos, "Seleccione un país");
            }

            if($turno == ""){
              array_push($campos, "Seleccione un turno");
            }

            if(count($postres) == ""){
              array_push($campos, "Seleccione los postres");
            }

            if(count($postres) < 2){
              array_push($campos, "Seleccione al menos 2 postres");
            }

            if(count($campos) > 0){
              echo '<div class="message error">';
              echo  '<p>' . $campos[0] .'</p>';
              echo '</div>';
            }else{
              echo '<div class="message success">';
              echo  '<p>' .'Datos correctos' .'</p>';
              echo '</div>';
            }

          }

      ?>
        <div class="mb-3 col-12 col-lg-6">
          <label for="correo" class="form-label">Usuario</label>
          <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario" value="<?php echo $usuario ?>">
        </div>

        <div class="mb-3 col-12 col-lg-6">
          <label for="correo" class="form-label">Correo</label>
          <input type="email" name="correo" class="form-control" id="correo" placeholder="name@example.com" value="<?php echo $correo ?>">
        </div>

        <div class="mb-3 col-12 col-lg-6">
          <label for="password" class="form-label">Contraseña:</label>
          <input type="password" name="contrasena" class="form-control" id="password" placeholder="********" value="<?php echo $contrasena ?>">
        </div>

        <div class="mb-3 col-12 col-lg-6">
          <label for="pais" class="form-label">Países:</label>
          <select name="pais" class="form-select" id="pais">
            <option value="">Selecciona país</option>
            <option value="pe" <?php if($pais === 'pe') echo "selected" ?>>Perú</option>
            <option value="mx" <?php if($pais === 'mx') echo "selected" ?>>México</option>
            <option value="eu" <?php if($pais === 'eu') echo "selected" ?>>Estados Unidos</option>
            <option value="es" <?php if($pais === 'es') echo "selected" ?>>España</option>
            <option value="ar" <?php if($pais === 'ar') echo "selected" ?>>Argentina</option>
          </select>
        </div>

        <div class="mb-3 col-12">
          <p class="mb-1">Turnos:</p> 
          <div class="d-flex justify-content-between flex-wrap">
            <div class="form-check mt-2">
              <input class="form-check-input" type="radio" name="turno" id="TurnoManana" value="Manana" 
                <?php if($turno === 'Manana') echo "checked" ?>>
              <label class="form-check-label" for="TurnoManana">
                Mañana
              </label>
            </div>

            <div class="form-check mt-2">
              <input class="form-check-input" type="radio" name="turno" id="TurnoTarde" value="Tarde" 
              <?php if($turno === 'Tarde') echo "checked" ?>>
              <label class="form-check-label" for="TurnoTarde">
                Tarde
              </label>
            </div>

            <div class="form-check mt-2">
              <input class="form-check-input" type="radio" name="turno" id="TurnoNoche" value="Noche" <?php if($turno === 'Noche') echo "checked" ?>>
              <label class="form-check-label" for="TurnoNoche">
                Noche
              </label>
            </div>
          </div>
        </div>
        
        <div class="mb-3 col-12">
          <p class="mb-1">Postres:</p>
          <div class="d-flex justify-content-between flex-wrap">
            <div class="form-check mt-2">
              <input class="form-check-input" name="postres[]" type="checkbox" value="alfajor" id="alfajor"
                <?php if(in_array("alfajor", $postres)) echo "checked" ?>>
              <label class="form-check-label" for="alfajor">
                Alfajores
              </label>
            </div>

            <div class="form-check mt-2">
              <input class="form-check-input" name="postres[]" type="checkbox" value="arrozLeche" id="arrozLeche"
                <?php if(in_array("arrozLeche", $postres)) echo "checked" ?>>
              <label class="form-check-label" for="arrozLeche">
                Arroz con Leche
              </label>
            </div>
          
            <div class="form-check mt-2">
              <input class="form-check-input" name="postres[]" type="checkbox" value="mazamorra" id="mazamorra"
                <?php if(in_array("mazamorra", $postres)) echo "checked" ?>>
              <label class="form-check-label" for="mazamorra">
                Mazamorra
              </label>
            </div>

            <div class="form-check mt-2">
              <input class="form-check-input" name="postres[]" type="checkbox" value="suspiro" id="suspiro"
                <?php if(in_array("suspiro", $postres)) echo "checked" ?>>
              <label class="form-check-label" for="suspiro">
                Suspiro Limeño
              </label>
            </div>
          </div>
          
        </div>
                
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary">Validar</button>
        </div>

        </div>
      </form>
    </div>
</div>

</body>
</html>