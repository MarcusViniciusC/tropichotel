<?php
    require_once("conecta.php");

    $id = 2; //id de quem será editado
    $nome = '';
    $dia = '';
    $endereco = '';
    $telefone = '';


    $query = $conecta->prepare("UPDATE tb_tropic SET nome = :NOME, dia = :DIA, endereco = :ENDERECO, telefone = :TELEFONE  WHERE idcliente = :ID");


    $query->execute(array(

        ':NOME' => $nome,
        ':DIA' => $dia,
        ':ENDERECO' => $endereco,
        ':TELEFONE' => $telefone,
        ':ID' => $id


    ));


?>