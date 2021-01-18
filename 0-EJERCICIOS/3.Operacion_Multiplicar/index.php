<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multiplicación</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container content_form">
    <form action="" class="form" method="post">
      <div class="row">
        <h2 class="mb-4">Multiplicación</h2>

        <?php 
          include('operadores.php');
          calcular();
        ?>

        <div class="d-flex flex-column flex-wrap">
          <div class="mb-3">
            <input class="form-control form-control-lg" type="text" name="numero01" >
          </div>
          <div class="mb-3">
            <input class="form-control form-control-lg" type="text" name="numero02" >
          </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-primary p-3 w-100">Calcular</button>
          </div>
        </div>
      </div>
    </form>

  </div>
</body>
</html>