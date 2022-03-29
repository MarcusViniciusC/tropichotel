<?php
    require_once("conecta.php");


    $id = 2; //id de quem será excluido




    $query = $conecta->prepare("DELETE FROM tb_tropic WHERE idcliente = :ID");
    $query->bindParam(":ID",$id);


    $query->execute();

    header("Location: http://localhost/projeto%20integrador/consultar.php"); 

?>