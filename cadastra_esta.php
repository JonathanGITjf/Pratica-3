<?php
    require("conecta.php");

    $placa = $_POST['PLACA'];
    $modelo =  $_POST['MODELO'];
    $horario = $_POST['HORARIO DE ENTRADA'];
    $estaweb = $_POST['estaweb'];
    #$cadastro = $_POST['solicitou a lavagem'];
    #$QUAL A LAVAGEM = $_POST['qual lavagem'];
    $qualalavagem = $_POST['exqual a lavagem'];

    $sql = "INSERT INTO esta (placa, modelo, horario de entrada, estaweb, qual forma de pagamento, solicitou a lavagem, qual a lavagem)
    VALUES ('$placa', '$modelo', '$horario', '$estaweb', 'qual a forma de pagamento', 'solicitou a lavagem', '$qual a lavagem')";

    if ($conn->query($sql) === TRUE) {
      echo "<center><h1>Registro Inserido com Sucesso</h1>";
      echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
?>