<?php  
var_dump($_POST);

$dia = $_POST["num_sem"];
echo "<br> El número elegido es: $dia <br>";
if($dia =="1"){
    echo "El número que le cooresponde es el Lunes";
}else if($dia =="2"){
    echo "El número que le cooresponde es el Martes";
}else if($dia =="3"){
    echo "El número que le cooresponde es el Miércoles";
}else if($dia =="4"){
    echo "El número que le cooresponde es el Jueves";
}else if($dia =="5"){
    echo "El número que le cooresponde es el Viernes";
}else if($dia =="6"){
    echo "El número que le cooresponde es el Sábado";
}else{
    echo "El número que le cooresponde es el Domingo";
}

?>
