<?php
    require("conecta.php");

    $nome = $_POST['PLACA'];
    $sobrenome =  $_POST['MODELO'];
    $email = $_POST['HORARIO DE ENTRADA'];
    $devweb = $_POST['devweb'];
    #$senioridade = $_POST['solicitou a lavagem'];
    #$tecnologia = $_POST['qual lavagem'];
    $experiencia = $_POST['experiencia'];

    $sql = "INSERT INTO dev (placa, modelo, horario de entrada, devweb, qual forma de pagamento, solicitou a lavagem, qual a lavagem)
    VALUES ('$placa', '$modelo', '$horario', '$devweb', 'qual a forma de pagamento', 'solicitou a lavagem', '$qual a lavagem')";

    if ($conn->query($sql) === TRUE) {
      echo "<center><h1>Registro Inserido com Sucesso</h1>";
      echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
?>