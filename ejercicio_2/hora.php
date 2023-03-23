<?php  
// var_dump($_POST);

$hora = $_POST["hora"];

if($hora =="mañana"){
    echo "Buenos días";
}else if($hora =="tarde"){
    echo "Buenos tardes";
}else{
    echo "Buenos noches";
}

?>
