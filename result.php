<?php 

    $testo = $_POST["allText"];
    $parola = $_POST["badWord"];

    $parolaSostituita = str_replace($parola, '***', $testo);
    
    $lungTesto = strlen($testo);
    
    $lungTesto2 = strlen($parolaSostituita);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
   
    <div class="container w-50 mt-5 p-4 bg-danger-subtle rounded-4 shadow">
        <h1 class="text-center pb-3">Risultato</h1>
        <div>
            <p class="mb-2 fs-5"><strong>Testo originale:</strong></p>
            <p class="fs-6 bg-light py-1 px-3 rounded-3 mb-1"> <?php echo $testo ?> </p>
            <p>Lunghezza: <?php echo $lungTesto ?> </p> 
        </div>

        <div class="mt-3">
            <p class="mb-2 fs-5"><strong>Testo modificato:</strong></p>
            <p class="fs-6 bg-light py-1 px-3 rounded-3 mb-1"> <?php echo $parolaSostituita ?> </p>  
            <p>Lunghezza: <?php echo $lungTesto2 ?></p>        
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>