<?php

    if($_SERVER["REQUEST_METHOD"] == ("GET")){
        $mat = $_GET["mat"];
        $nome = $_GET["nome"];

    }

?>

<!Doctype html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title> Gustavo</title>
        </head>

        <body>
            <form action="ex01_AlterarMat.php" method="POST">
            Nome <input type="text" name="nome" value=<?php echo $nome ?>''><br>
            AV1 <input type="text" name="aval1" value=<?php echo $av1 ?>''><br>
            AV2 <input type="text" name="aval2" value=<?php echo $av2 ?>''><br>
            <input type="submit">
            </form>

        </body>
    </html>