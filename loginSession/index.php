                        <?php
    session_start();
    $n = isset($_SESSION ['esta_logado']);

    if($n == false OR $_SESSION ['esta_logado'] == false){


            header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">

	<title>Document</title>
</head>
<body>

	<div class="social">

		<a href="verifica_usuario.php?acao=sair" class="sair">sair</a>

		<img src="http://static6.depositphotos.com/1081090/578/i/950/depositphotos_5788258-stock-photo-purple-flower-photo-object.jpg" alt="" width="200" height="200">
		<h3>Bem vindo!</h3>
	</div>

</body>
</html>