<!DOCTYPE html>
<html lang="pt-br">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto_A3.con</title>
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
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            border-radius: 10px;
        }
        button{
            background-color: rgb(0, 0, 0);
            border: none;
            padding: 15px;
            width: 100%;
            color: white;
            border-radius: 10px;

        }
        button:hover{
            background-color: rgb(54, 45, 45);
        }
    </style>
</head>
<body>
  <div>

    <form  method="POST">
    <h1>Login</h1>
    <input type="text" name= "Email" placeholder= "Email">
    <br>
    <br>
    <input type="password" name="Senha" placeholder= "Senha">
    <br>
    <br>
    <button onclick="document.location='logn.php'">Enviar</button>
</form>
    </div>
</body>
</html>