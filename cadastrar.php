<?php
    require_once("conecta.php");

    if($_POST["nome"] && $_POST["dia"] &&  $_POST["endereco"] &&  $_POST["telefone"]){

    $nome = $_POST["nome"];
    $dia = $_POST["dia"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];

    $query = $conecta->prepare("INSERT INTO tb_tropic(nome,dia,endereco,telefone) VALUES (:NOME, :DIA, :ENDERECO, :TELEFONE)");

        
        $query->execute(array(
            ':NOME' => $nome,
            ':DIA' => $dia,
            ':ENDERECO' => $endereco,
            ':TELEFONE' => $telefone
        ));

       echo'<script>alert("parabens, sua viagem foi agendada com sucesso"); window.location.replace("index.php")</script>;';
       
    }else {
        header("Location: http://localhost/projeto%20integrador/formulario.php");
    }
    
    
?>