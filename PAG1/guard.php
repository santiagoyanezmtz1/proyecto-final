<?php

    $usuario = "root"; 
    $password = "12345678";  
    $servidor = "localhost"; 
    $basededatos ="formulario"; 


$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 



$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");


        
    $nombre=$_POST['nombre']; 
     $apellidos=$_POST['apellidos']; 
      $correo=$_POST['correo']; 
       $contraseña=$_POST['contraseña']; 
    $SEXO=$_POST['SEXO']; 
    $ESTADO=$_POST['ESTADO']; 
     $gender=$_POST['gender']; 

    
    $sql="INSERT INTO datos VALUES ('$nombre','$correo','$mensaje')"; 


    $ejecutar=mysqli_query($conexion, $sql);


    
    if(!$ejecutar){
        echo"huvo algun error"; 
    }else{
        echo"datos guardado correctamente <br><a href='imagen.html'>volver</a>"; 
    }
     
?>﻿
