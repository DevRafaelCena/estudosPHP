<?php

    session_start();

    $name = $_POST['name'];
    $age = $_POST['age'];

    
    //validações
    if(empty($name) or empty($age)){
        $_SESSION['msgError'] = 'os campos devem ser preenchidos';
        return;
    }
    if(strlen($name)<3 or strlen($name) >15){
        echo 'nome deve conter mais de 3 caracterese e até 15 caracteres';
        return;
    }

    if(!is_numeric($age)){
        echo 'Digite apenas numero no campo idade';
        return;
    }




?>

