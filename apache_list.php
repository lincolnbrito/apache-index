<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Índice</title>
</head>
<body>
	<h1>Listagem de Arquivos do Servidor</h1>
	<?php 

		if ($handle = opendir('.')) {
		    while (false !== ($file = readdir($handle))) {
		        if ($file != "." && $file != "..") {
		            echo "$file<br />";
		        }
		    }
		    closedir($handle);
		}

	?>
</body>
</html>