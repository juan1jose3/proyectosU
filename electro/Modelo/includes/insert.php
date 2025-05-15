<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $cedula = $_POST["cedula"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $telefonos = $_POST["telefonos"];
    $direccion = $_POST["direccion"];
    $barrio = $_POST["barrio"];
    $ciudad = $_POST["ciudad"];
    $correo = $_POST["correo"];
    $electro = $_POST["electro"];
    $visita = $_POST["visita"];
    $des = $_POST["des"];


    try{

        $query = "INSERT INTO cliente (Cedula, Nombres, Apellidos, Telefonos,Direccion ,Barrio ,Ciudad); 
        VALUES(:Cedula, :Nombres, :Apellidos, :Telefonos, :Direccion ,:Barrio , :Ciudad )";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":Cedula", $cedula);
        $stmt->bindParam(":Nombres", $nombres);
        $stmt->bindParam(":Apellidos", $apellidos);
        $stmt->bindParam(":Telefonos", $telefonos);
        $stmt->bindParam(":Direccion", $direccion);
        $stmt->bindParam(":Barrio", $barrio);
        $stmt->bindParam(":Ciudad", $ciudad);

        $stmt->execute();

        $pdo = null;
        $stmt = null;
        header("./index.html");
        


    }catch (PDOexception $e){
        echo "Query Failed: " . $e->getMessage();
        die();


    }
}