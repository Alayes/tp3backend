<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
</head>
<body>

<h2>Ejercicio 1</h2>


<?php
$n= 

if ($n > 0) {
    echo "el numero es positivo";
}
elseif ($n == 0) {
    echo "el numero es 0"
}
else {
    echo "el numero es menor a 0"

}
?>
<h2>Ejercicio 2</h2>
<?php
$n= mayor a 1 menor a 10

if ($n > 1 , $n < 10) {
    echo "el numero es mayor a 1 y menor a 10"
}
elseif($n < 1){
    echo "el numero es menor a 1"
}
else($n > 10){
    echo "el numero es mayor a 10"
}
    
?>
<h2>Ejercicio 3</h2>
<?php
$n= mayor a 10 menor a 2

if ($n > 10 , $n < 2){
    echo "el numero es mayor a 10 y menor a 2"
}
elseif ($n < 10){
    echo "el numero es menor a 10"
}
else ($n > 2){
    echo "el numero es mayor a 2"
}


?>
<h2>Ejercicio 4</h2>
<?php
$numero1= si es mayor a numero 2, mostrar suma y resta
$numero2= si es mayor a numero 1, mostrar multip y div entera y resto div

if ($numero1 > $numero2){
    echo $numero1 + $numero2
    echo $numero1 - $numero2
}
else ($numero1 < $numero2){
    echo $numero1 * $numero2
    echo $numero1 / $numero2
    echo $numero1 % $numero2
}

?>

</body>
</html>