<?php
session_start();
if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    if(is_int($id)){
        if($id>1 & $id<11){
            if($id%2==0){
                $_SESSION['numeros'][] = $id;
            }            
        }        
    }
}
if (isset($_SESSION['numeros'])) {
    foreach ($_SESSION['numeros'] as $numero) {
        echo "Ingresé al array y tengo el ID: $numero<br>";
    }
}
?>