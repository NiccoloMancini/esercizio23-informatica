<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $nome = $_GET["nome"];
        $cognome = $_GET["cognome"];
        $email = $_GET["email"];
        echo "<h1>Dati Inviati</h1>"
    ?>


    <table style="border-collapse:collapse">
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>E-mail</th>
        </tr>
        <?php
            echo "<tr> <td>$nome</td> <td> $cognome</td> <td> $email</td> </th>";
       ?>
    </table>
</body>
</html>