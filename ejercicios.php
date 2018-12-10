<h2>Ejercicio 1</h2>

<?php
$arreglo = [

	keyStr1 => ‘lado’,
	0 => ‘ledo’,

	keyStr2 => ‘lido’,
	1 => ‘lodo’,
	2 => ‘ludo’

];

echo $arreglo[keyStr1], $arreglo[0], $arreglo[keyStr2], $arreglo[1], $arreglo[2];
echo '<br>';
echo $arreglo[2], $arreglo[1], $arreglo[keyStr2], $arreglo[0], $arreglo[keyStr1]; 
?>

<h1>ejercicio 2</h1>
<?php
$ejercicio2 = [
    'Mexico' => [
      'Monterrey', 'Queretaro', 'Guadalajara'
    ],
    'Colombia' => [
      'Bogota', 'Cartagena', 'Medellin'
    ]
    ];
    foreach ($ejercicio2 as $pais => $ciudades) {
        // $array[3] se actualizará con cada valor de $array...
        echo '<h2>'. $pais .'</h2>';
        echo '<br>';
        foreach ($ciudades as $valor) {
            // $array[3] se actualizará con cada valor de $array...
            echo $valor;  
            echo '<br>';      
        }
    }

?>
<h1>ejercicio operadores</h1>
<h2>ejercicio 1</h2>
<?php
$a = 32+3; 
$b = 32;
$c = 3;
$d = $b+$c;
?>
<p>Respuestas</p>
<?php
echo $a.'<br>';
echo $d;
?>
<h2>ejercicio 2</h2>
<?php
$aleatorio = random_int (0,20);
echo '<h1> El valor que tomo la variable $valor es ' .$aleatorio. '</h1>';


$valor = $aleatorio;
echo '<h3>respuesta 2-a</h3><br>';
if (($valor>5) and ($valor < 10 )) {
    # code...
    echo 'El valor es mayor que 5 pero menor que 10 </br>';
    echo 'valor es igual a: '.$valor;
    }
    else{
    echo 'El valor que tomo la variable esta fuera del rango';
    }
    echo '<h3>respuesta 2-b</h3><br>';
    if (($valor >= 0)&&($valor<= 20)) {
        # code...
        echo 'El valor es mayor o igual a 0 pero menor o igual 20 </br>';
        echo 'valor es igual a: '.$valor;
    }
    else{
        echo 'El valor que tomo la variable esta fuera del rango';
    }
    echo '<h3>respuesta 2-c </h3><br>';
    if ($valor === '10') {
        # code...
        echo 'El valor es igual y adicionalmente es de tipo string, por lo tanto es identico';
    }
    else{
        echo 'El valor no es igual o no es de tipo string, por lo tanto <b>NO</b> es identico <br>';
    }
    echo '<h3>respuesta 2-d</h3><br>';
    if ((($valor > 0)&&($valor<= 5)) or (($valor >= 10)and($valor<= 15))) {
        # code...
        echo 'El valor esta en el rango de 0 a 5 o entre 10 y 15<br>';
    }
    else{
        echo 'El valor no es igual o no es de tipo string, por lo tanto <b>NO</b> es identico';
    }

?>