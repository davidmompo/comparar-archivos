<!DOCTYPE html>
<html>
<head>
        <title>Diferencias de archivos</title>
<style>
body{
	background-color: skyblue;
	color: white;
	text-shadow: 1px 1px 1px black; 
}

.contenedor{
	display: grid;
	grid-template-columns: auto auto;
	margin-top: 5%;
	margin-left: 25%;
}
</style>
</head>
<body>
<div class="contenedor">
<div class="uno">
<h1>Archivo 1:</h1>
<?php
// Obtener los nombres de los archivos A y B desde el formulario
$filenameA = $_POST["archivo1"];
$filenameB = $_POST["archivo2"];

// Verificar si los archivos son válidos
if (!is_file($filenameA)) {
    die("Error: El archivo 1 especificado no es válido.");
}
if (!is_file($filenameB)) {
    die("Error: El archivo 2 especificado no es válido.");
}

// Leer los contenidos de los archivos en dos arreglos
$fileA = file($filenameA);
$fileB = file($filenameB);

// Comparar los contenidos de ambos archivos
$allLines = array_unique(array_merge($fileA, $fileB));
$differences1 = array_diff($allLines, array_intersect($fileA));
$differences2 = array_diff($allLines, array_intersect($fileB));

// Imprimir las líneas diferentes
foreach ($differences2 as $line) {
    echo "<p>Diferencia linea :   $line</p>";
}

/*// Imprimir las líneas diferentes
foreach ($differences1 as $line) {
    echo "<p>Diferencia linea :   $line</p>";
}*/
?>
</div>

<div class="dos">
<h1>Archivo 2:</h1>
<?php
// Obtener los nombres de los archivos A y B desde el formulario
$filenameA = $_POST["archivo1"];
$filenameB = $_POST["archivo2"];

// Verificar si los archivos son válidos
if (!is_file($filenameA)) {
    die("Error: El archivo 1 especificado no es válido.");
}
if (!is_file($filenameB)) {
    die("Error: El archivo 2 especificado no es válido.");
}

// Leer los contenidos de los archivos en dos arreglos
$fileA = file($filenameA);
$fileB = file($filenameB);

// Comparar los contenidos de ambos archivos
$allLines = array_unique(array_merge($fileA, $fileB));
$differences1 = array_diff($allLines, array_intersect($fileA));
$differences2 = array_diff($allLines, array_intersect($fileB));

/*// Imprimir las líneas diferentes
foreach ($differences2 as $line) {
    echo "<p>Diferencia linea :   $line</p>";
}*/

// Imprimir las líneas diferentes
foreach ($differences1 as $line) {
    echo "<p>Diferencia linea :   $line</p>";
}
?> 
</div>
</div>

</body>
</html>
