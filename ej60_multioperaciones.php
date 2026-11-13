<!DOCTYPE html>
 <html lang="es">
 <head>
 <meta charset="UTF-8">
           <title>Registro de numeros</title>
           </head>
           <body>
           <h2>REGISTRO DE DOS</h2>
                        
<form method="POST" action="">
<?php
for ($i = 0; $i < 3; $i++) {
        echo "Producto:";
        
        echo "<input type='text' name='productos[]'>" . " ";

        echo "Precio:";

        echo "<input type='number' name='precios[]'>" . " ";

        echo "Cantidad:";

        echo "<input type='number' name='cantidades[]'>" . " ";

        echo "<br><br>";

        }     
        ?>

        <button type="submit" name="guardar" value="guardar">

        Guardar y calcular </button>

        <?php
        if (isset($_POST['guardar']))

         {
        $numeros1 = $_POST["NUMERO 1"];
        $numeros2 = $_POST["NUMERO 2"];

        $suma = array();

        $resta = array();

        $multiplicacion = array();
        $division = array();

    for ($i = 0; $i < 3; $i++) {

    $suma[$i] = $numero1[$i] + $numero2[$i];

    $resta[$i] = $numero1[$i] - $numero1[$i];

    $multiplicacion[$i] = $numero1[$i] * $numero2[$i];

    $division[$i] = $numero1[$i] / $numero2[$i];

    }echo "<h3>ARREGLO DE SUMA</h3>";

    for ($i = 0; $i < 3; $i++) { 
    echo $suma[$i] . "<br>";

    } echo "<h3>ARREGLO DE RESTA</h3>";

    for ($i = 0; $i < 3; $i++) {
    echo "$" . number_format($precios[$i], 2) . "<br>";

    } echo "<h3>ARREGLO DE multiplicacion</h3>";

     for ($i = 0; $i < 3; $i++) {
    echo "$" . number_format($subtotales[$i], 2) . "<br>";

    } echo "<h3>ARREGLO DE DIVISION</h3>";

    for ($i = 0; $i < 3; $i++) {
    echo "$" . number_format($iva[$i], 2) . "<br>";

}
    }

?>
</body>
</html> 