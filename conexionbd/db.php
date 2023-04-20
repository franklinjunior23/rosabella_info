<?php
    
       /* $hostname ='localhost';
        $usuariodb ='root';
        $passworddb ='franko123';
        $dbname ='proyecto';
        

        $conectar = mysqli_connect($hostname, $usuariodb, $passworddb,$dbname);**/
        //CONEXION CON LA BASE DE DATOS
        $conexion = new PDO("mysql:host=localhost;dbname=floreria","root","franko123");
        
    ?>