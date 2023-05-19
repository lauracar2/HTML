

<!DOCTYPE html>
<html lang="pt-br">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto_A3.con</title>
    <style>
         h1{

position: absolute;
top: 50%;
left: 50%;  
transform: translate(-50%,-100%);

padding: 160px;

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
            
            padding: 81px;
           color: white;
         
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            border-radius: 10px;
            
        }
       
        
    </style>
    <style>
         button{
            background-color: rgb(0, 0, 0);
            color: white;
            position: absolute;
            top: 120%;
            left: 50%;  
            transform: translate(-50%,-50%);
            width: 135%;
            padding: 20px;
           color: white;
           padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            border-radius: 10px;
            
        }
        button:hover{
            background-color: rgb(54, 45, 45);
        }
    </style>
</head>
<body>
    <div>
    <h1>Cadastro</h1>
    </div>
  <div>
<form  method="POST">
    
    <input type="text" name="nome" placeholder="Username" mexlength="30">
    <br>
    <br>
    <input type="text" name="Email" placeholder="Email" mexlength="30">
    <br>
    <br>
    <input type="password" name="Senha" placeholder="Senha" mexlength="32">
    <br>
    <br>
</form>
    </div>
    <div> 
    <button onclick="document.location='inicio.php'">Entrar</button>
    </div>
</body>
</html>




 