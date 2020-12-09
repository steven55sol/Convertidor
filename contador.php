<?php

if(!$_POST){
    header('Location:index.html');
}

function convertir(){

    $cantidad = $_POST['cantidad'];
    $moneda = $_POST['monedas'];

    if($moneda == 'Usd'){
        $precio = 3.28;
    }else{
        $precio = 3.43;
    }
    $total = $cantidad / $precio;

    return array($cantidad,$moneda,$total);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php  
    $resultado = convertir()
  ?>
  <?php 
    echo '<h1>' . 'El total de '. $resultado[0] . ' soles en '. $resultado[1] . ' es de: ' . round($resultado[2], 2) . '</h1>';  
  ?>

</body>
</html>