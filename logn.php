<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de inicio</title>
</head>
<body>
    <style>
        body{

          background-image: linear-gradient(45deg,rgb(13, 1, 19),rgb(198, 54, 64));
        }
        h1{
            position: absolute;
            top: 50%;
            left: 50%;  
            transform: translate(-50%,-750%);
            color: white;
        }
        img{

            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px; 
        }
        button{
            background:linear-gradient(45deg,rgb(13, 1, 19),rgb(198, 54, 64));
            position:absolute;right:20px;bottom:650px;
            color: white;
        }
        button:hover{
            background-color: rgb(54, 45, 45);
        }
    </style>
   <div>
    <h1>O MITO</h1>
  </div> 

  <div>
 <img src="bolsonaro_mito.png">
 <button onclick="document.location='index.php'">sair</button>
  </div>

</body>
</html>