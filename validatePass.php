<?php 
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=login", "rogeraws", "P@ssw0rd");
        $query = $pdo->prepare("SELECT * FROM login where username = '". $_POST['login']."' and password = SHA2('".$_POST['password']."',512);" );
        $query->execute();
        $registre = $query->fetch();
        if(!$registre){
      		echo "Contraseña o usuario incorrecto";
        }else{
        	echo "bienvenido ". $_POST['login'];
        }
    } catch (PDOException $e) {
        echo "Failed to get DB handle: " . $e->getMessage() . "\n";
        exit;
    }
 ?>