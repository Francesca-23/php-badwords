<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
   
    <div class="container w-50 mt-5 p-4 bg-info-subtle rounded-4 shadow">
        <h1 class="text-center pb-3">Badwords</h1>

        <form action="result.php" method="POST">
            
            <div class="mb-3">
                <label class="form-label"><strong>Scrivi un testo</strong></label>
                <textarea class="form-control" rows="3" name="allText"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label"><strong>Quale parola vuoi nascondere?</strong></label>
                <input type="text" class="form-control w-50" name="badWord">
            </div>
            <button type="submit" class="btn btn-info px-5 mt-2">Invia</button>
    
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>