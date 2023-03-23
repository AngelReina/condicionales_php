<?php  
// var_dump($_POST);

$dia = $_POST["asignatura"];
echo "<br> El día elegido es: $dia <br>";
if($dia =="Lunes"){
    echo "La primera asignatura del día es Física";
}else if($dia =="Martes"){
    echo "La primera asignatura del día es Lengua";
}else if($dia =="Miercoles"){
    echo "La primera asignatura del día es Matemáticas";
}else if($dia =="Jueves"){
    echo "La primera asignatura del día es Química";
}else{
    echo "La primera asignatura del día es Inglés";
}

?>
