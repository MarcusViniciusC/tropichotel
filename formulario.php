<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet">
    <title>Agende sua viagem</title>
    <style>
      body{
            background: url(img/fundoLogin.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
        }
    </style>


</head>
<body>

<div class="cadastro">
        <h1 id="h1">Agendar</h1>
    
    <hr>
<form action="cadastrar.php" method="POST" autocomplete="off">

<input class="cad" type="text"placeholder="Seu nome" name="nome">

<br>

<input class="cad" type="text" placeholder="Telefone" name="telefone">

<br>

<input class="cad" type="text" placeholder="Endereço" name="endereco">

<br>
<input class="cad" type="date"placeholder="Dia da viagem" name="dia">


<br><br>
<div id="btn">
    <button id="botao" type="submit">Agendar</button>



    <a class="back" href="index.php">voltar</a>
</div>
<br>
</form>
    
    
</div>

</body>
</html>