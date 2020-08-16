<?php
	require_once 'Estudiantes_modelo.php';
	$estudiante = new Estudiantes_modelo();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/3aeccddc68.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="grid grid-cols-1 text-center">
        <h1 class="text-4xl font-bold ">CRUD CON PHP</h1>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 m-4">
        <div class="col-span-1" >
		<?php
			if(isset($_POST['submit'])){
				$alumno = [
					'nombre'  => $_POST['nombre'],
					'paterno' => $_POST['paterno'],
					'materno' => $_POST['materno'],
					'email'   => $_POST['email']
				]; 
			
				$respuesta = $estudiante->insertar($alumno);
				
			}
		
		?>

		

		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
			<div class="mb-4">
				<label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">
					Nombre
				</label>
				<input type="text" name="nombre" id="name" placeholder="Escribe tu nombre" class="shadow appearance-none border border-blue-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
			</div>

			<div class="mb-4">
				<label class="block text-gray-700 text-sm font-bold mb-2" for="paterno">
					Apellido Paterno
				</label>

				<input  type="text" name="paterno" id="paterno" placeholder="Escribe tu apellido paterno" class="shadow appearance-none border border-blue-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
			</div>

			<div class="mb-4">
				<label class="block text-gray-700 text-sm font-bold mb-2" for="materno">
					Apellido Materno
				</label>
				<input type="text" name="materno" id="materno" placeholder="Escribe tu apellido materno" class="shadow appearance-none border border-blue-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
			</div>

			<div class="mb-4">
				<label class="block text-gray-700 text-sm font-bold mb-2" for="email">
					Email
				</label>
				<input type="text" name="email" id="email" placeholder="Escribe tu email" class="shadow appearance-none border border-blue-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
			</div>

			<div >
				<input type="submit" name="submit" value="Agregar" class="cursor-pointer bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">
			</div>
            </form>
        </div>
        <div class="col-span-1 sm:col-span-2">
            <table class="w-full table-auto text-center">

            <thead class="bg-blue-500 text-white">
                <tr>
                <th class="w-1/2 px-4 py-2">Nombre</th>
                <th class="w-1/2 px-4 py-2">Paterno</th>
                <th class="w-1/4 px-4 py-2">Materno</th>
                <th class="w-1/2 px-4 py-2">Email</th>
                <th class="w-1/2 px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
	
                $resultados = $estudiante->consultar();
                foreach ($resultados as $estudiante) {
                    echo '<tr>'.
                            '<td class="border px-4 py-2">'. $estudiante['nombre'] .'</td>'.
                            '<td class="border px-4 py-2">'. $estudiante['paterno'] .'</td>'.
                            '<td class="border px-4 py-2">'. $estudiante['materno'] .'</td>'.
                            '<td class="border px-4 py-2">'. $estudiante['email'] .'</td>'.
							'<td class="border px-4 py-2">
								<i class="cursor-pointer fas fa-trash-alt text-red-500"></i>
							</td>'
                        .'</tr>';
                }
                
            ?>
            </tbody>
            </table>
        </div>
    </div>

</body>
</html>