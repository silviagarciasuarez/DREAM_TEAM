<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="row">



    <?php
        include('conexion.php');
        foreach ($consulta as $campo) {
        echo "<div class='col-lg-4 col-md-6 col-sm-12'>";
        echo "<p>". $campo['nombre'] ."</p>";
      /*   echo "<p>" . $campo['apellidos'] ."</p>";
        echo "<p>". $campo['cargo'] ."</p>"; */
        echo '</div>';
    }
    ?> 

    </div>
</body>
</html>


