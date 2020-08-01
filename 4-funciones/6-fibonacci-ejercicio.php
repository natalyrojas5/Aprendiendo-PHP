
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci - Ejercicio</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    
    <?php 
        $fibonacci = [];
        for($i = 0; $i <=6; $i++){
            if($i <= 1){
                $fibonacci[$i] = $i;
                continue;
            }

            $fibonacci[$i] = $fibonacci[$i - 2] + $fibonacci[$i -1];
        }

        // Convirtiendo el array a string separado por (,)
        $fibonaci2= implode(',',$fibonacci);
        echo '<h1>FIBONACCI</h1>';
        var_dump($fibonaci2)
    ?>

</body>
</html>