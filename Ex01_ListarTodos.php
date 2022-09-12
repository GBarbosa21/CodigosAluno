<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>ListarTodos</title>
</head>
<body>
    <h1>Listar Todos</h1>
		<?php
		$arquivoAlunos = fopen("Alunos.txt", "r")  or die("arquivo com problemas");
			echo "Nome; matricula; funcao; <br><br>";
		while (list($nome, $mat, $av1, $av2, $media) = fgetcsv($arquivoAlunos, 1000, ";")){
			echo $nome . " "  . $mat . " "  . $av1. " " . $av2 . " " . $media . "<br>";
		}
		fclose($arquivoAlunos);
		?>
</body>
</html>