<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<style>

body{
			width: 200px;
            height: 700px;
            background: linear-gradient(to bottom, blue, purple);
           transition: background-color 0.5s ease; 
		   }
           h1{

            transform: translate(330%,80%) ;
            color: white;
           }
           a{
            transform: translate(60%,30%) ;
            color: white;
           }

</style>

<body>
    <center>
        <h1>Olá,
        <?php
        if(isset($_SESSION['nome'])==null){
        ?>
            visitante</h1>
        <a href="login.php">login</a><br>
        <?php } else {
            echo $_SESSION['nome']; ?>

        </h1><a href="cadastro.php">Cadastrar</a><br>
        <a href="logout.php">Sair</a>
        <?php } ?>
    </center>
</body>
</html>