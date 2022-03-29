<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet">
    <style>
        body{
            background: url(img/adm2.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
        }
    </style>

<script>
        function validar(){
             
			/*var USU_ARIO = "admin";
			var PASS_WORD = "12345";*/


            if((document.entrada.usuario.value == "admin" ) && (document.entrada.senha.value == "12345")){
				sessionStorage.setItem('usuario') = "admin";
                return true;
            } else {
                alert('Usuário ou senha incorretos');
                return false;
            }
        }
    </script><!--FIM JAVA SCRIPT-->

    <title>Document</title>
</head>
<body>
<div class="cadastro">
        <h1 id="h1">Entrar</h1>
    
    <hr>
<form id="entrada" name="entrada" action="consultar.php" method="POST" onsubmit="return validar();" autocomplete="off">

<input class="cad"  type="text" placeholder="Usuario" name="usuario" id="usuario">

<br>

<input class="cad" type="password" placeholder="Senha" name="senha" id="senha">

<br>

<br><br>
<div id="btn">
    <button id="botao" type="submit">entrar</button>



    <a class="back" href="index.php">voltar</a>
</div>
<br>
</form>
    
    
</div>
</body>
</html>