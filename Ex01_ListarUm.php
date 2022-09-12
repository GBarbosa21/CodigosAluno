<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>ListarUm</title>
</head>
<body>
<form action="ex01_ListarUm.php" method=POST>
		Matricula: <input type=text name="matricula" value=''> <br>
		<br>
		<input type="submit" value="Incluir">
		</form>
		
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$temp = $_POST["mat"];
			
		$arquivoAluno = fopen("Alunos.txt", "r")  or die("arquivo com problemas");
			echo "Nome;matricula; av1; av2; media; <br><br>";
		while (list($nome, $mat, $av1, $av2, $media) = fgetcsv($arquivoUsuario, 1000, ";")){
			if($temp == $mat){
			echo $nome;
			echo " " . $matricula;
			echo " " . $av1;
            echo " " . $av2;
            echo " " . $media . "<br>";
			
			break;
			}
				}
		fclose($arquivoAluno);
			}
		?>
</body>
</html>