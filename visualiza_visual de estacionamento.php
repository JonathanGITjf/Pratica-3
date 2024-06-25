<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização de estacionamento</title>
</head>

<body>
    <center>
        <h1>Cadastro de estacionamento</h1>

        <table border="4">
            <tr>
                <td>PLACA</td>
                <td>MODELO</td>
                <td>HORARIO DE ENTRADA</td>
                <td>HORARIO DE SAIDA</td>
            </tr>
            <?php
                require("conecta.php");

                $dados_select = mysqli_query($conn, "SELECT PLACA, MODELO, HORARIO DE ENTRADA, HORARIO DE SAIDA FROM DEV");

                while($dado = mysqli_fetch_array($dados_select)) {
                        echo '<tr>';
                        echo '<td>'.$dado[0].'</td>';
                        echo '<td>'.$dado[1].'</td>';
                        echo '<td>'.$dado[2].'</td>';
                        echo '</tr>';
                }
            ?>
        </table>
        <br />
        <a href="index.html"><input type="button" value="Voltar"></a>
    </center>
</body>

</html>