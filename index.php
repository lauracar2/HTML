<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN|CADASTRO</title>
</head>
<style>
    h1{
        text-align: center;
            top: 100%;
            left: 100%;
            transform: translate(-25%,-100%);
            padding: 150px;
           color: white;
           width: 150%;
    }
</style>
<style>

body{
font-family: Arial, Helvetica, sans-serif;
           background-image: linear-gradient(45deg,rgb(13, 1, 19),rgb(198, 54, 64));

}

div{

    position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
           color: white;
}
    button{
        
        background-color: rgb(0, 0, 0);
            border: none;
            padding: 25px;
            width: 150%;
            color: white;
            border-radius: 10px;
            
    }
    button:hover{
            background-color: rgb(54, 45, 45);
        }
   
    
</style>
<body>
<div>
    <h1>Acesse ou se cadastre em nosso site :) </h1>
</div>
<div>
<button onclick="document.location='inicio.php'">Login</button>
<br><br>
<button onclick="document.location='cadasstro.php'">Cadastro</button>
</div>
</body>
</html>