<?php
$numero=$_POST['B'];

if($numero >= 70 ){
    echo'aprovado';
}else if($numero < 70){ 
    echo 'reprobado';
}else if($numero < 0 || $numero > 100){
    echo 'Error';
}

?>