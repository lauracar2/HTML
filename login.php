<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Projeto A3</title>
</head>

<style>
           body{
			width: 200px;
            height: 700px;
            background: linear-gradient(to bottom, blue, purple);
           transition: background-color 0.5s ease; 
		   }

		   div{
			background: black;
			color: purple; 
			width: 350px;
			padding: 30px;
			font-family: georgia;
			border-radius: 60px;
			margin-left: 527px;
			transform: translate(10%,80%);
            opacity: 0,90%;
			

		   }
		   input{
			width:220px;
			padding: 4px;
			border-radius: 60px;
			
			
		   }
		   button{
			color: black;
			background:  purple;
			width:150px;
			border-radius: 20px;
			margin-left: 50px;
			
		   }
		 
  </style>
<body>
	<center>
		<div>
		<h1>Login</h1>
		<form id="form-login" action="logado.php" method="POST">
			Login: <input type="text" name="login" required>
			<br>
			<br>
			Senha: <input type="password" name="senha" required><br><br>
			<button>Enviar</button>
		</form>
		
		</div>
	</center>
</body>
</html>