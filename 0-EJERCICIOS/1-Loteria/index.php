<?php
    require_once 'Loteria_modelo.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Loteria</title>
</head>
<body class="bg-blue-100">

    <main class="mx-10 sm:mx-32 md:mx-56 xl:mx-56 pt-10">
        <form id="formSorteo" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 sm:w-2/3  md:w-2/4 xl:w-1/2 m-auto" >
            <div class="text-center pb-5">
                <h1 class="text-5xl font-bold">¡SORTEO!</h1>
                <p>Tienes 5 intentos</p>
            </div>
			<div class="mb-4">
				<label class="block text-gray-700 text-sm font-bold mb-2 text-base uppercase" for="numero">
					Ingresa un número
				</label>
				<input type="number" name="numero" id="numero" placeholder="Escribe un número" class="shadow appearance-none border border-blue-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
			</div>
            <div>
				<input type="submit" name="submit" value="Sortear" class="cursor-pointer bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">
            </div>

            
            
            <div class="mt-5 p-5 text-center border-solid border-4 border-blue-500">
                <div class="sk-chase p-5 my-20 m-auto hidden" id="spinner">
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                </div>
                <div  id="resultado">
                    <?php
                        
                        if(isset($_POST['submit'])){
                            $num = $_POST['numero'];
                            settype($num, 'int'); 
                            $loteria = new Loteria($num,5);
                            $loteria->sortear();
                        }
                        
                    ?>
                </div>
            </div>

        </form>
    </main>

    <script src="js/script.js"></script>
</body>
</html>