<html>
<head>
<?php
	session_start();
	if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)):
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		header('location: ../index.php');
	endif;
	$logado = $_SESSION['login'];
	if(isset($_POST['exitsession'])):
		session_destroy();
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		header('location: index.php');
	endif;
?>
<title>HCTF 3.3</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/funcoes.js"></script>
</head>
<?php
	require_once('../php/conexao.php');
	require_once('../php/usuario.php');
	require_once('../php/resposta.php');
?>
<body>
	<div id="opcoes">
		<div id="logo">
		</div>
		<div id="nome">
			<h2>Heaven Capture The Flag</h2>
			<h2>HCTF</h2>
		</div>
		<div id="infor_user">
			<div id="user_dados">
				<h2>Usuário: <?php echo $usuario_exibir['nome']; ?></h2>
				<h2>Pontos: <?php echo $usuario_exibir['pontos']; ?></h2>
			</div>
			<div id="picture">
			</div>
			<div id="exit">
				<form method="post">
					<input type="submit" name="altimg" value="Alterar Imagem" >
					<input type="button" name="ranking" data-url="ranking/index.php" class="bt_url" value="Ranking">
					<input type="submit" name="exitsession" value="Sair" >
				</form>
			</div>
		</div>
	</div>
	<div id="body">
		<div id="lateral">
			<div id="web" data-url="#opcion_web" class="bt_lateral">
				<h2>WEB</h2>
			</div>
				<div id="opcion_web">
					<a data-url="web/pergunta01.php" class="bt_url" ><div>1</div></a>
					<a data-url="web/pergunta02.php" class="bt_url" ><div>2</div></a>
					<a data-url="web/pergunta03.php" class="bt_url" ><div>3</div></a>
				</div>
			<div id="revision">
				<h2>REVISION</h2>
			</div>
				<div id="opcion_revision">
					<a data-url="revision/pergunta01.php" class="bt_url" ><div>1</div></a>
					<a data-url="revision/pergunta02.php" class="bt_url" ><div>2</div></a>
					<a data-url="revision/pergunta03.php" class="bt_url" ><div>3</div></a>
				</div>
			<div id="cryptography">
				<h2>CRYPTO</h2>
			</div>
				<div id="opcion_cryptography">
					<a data-url="crypto/pergunta01.php" class="bt_url" ><div>1</div></a>
					<a data-url="crypto/pergunta02.php" class="bt_url" ><div>2</div></a>
					<a data-url="crypto/pergunta03.php" class="bt_url" ><div>3</div></a>
				</div>
			<div id="custom">
				<h2>CUSTOM</h2>
			</div>
				<div id="opcion_custom">
					<a data-url="custom/pergunta01.php" class="bt_url" ><div>1</div></a>
					<a data-url="custom/pergunta02.php" class="bt_url" ><div>2</div></a>
					<a data-url="custom/pergunta03.php" class="bt_url" ><div>3</div></a>
				</div>
		</div>
		<div name="iframe" id="iframe">
		<?php include_once('home.php'); ?>
		</div>
	</div>
	<div id="rodape">
		Created by<br>
		Marlon <a href="https://www.facebook.com/MarlonBrenoGera">"NoobZituh"</a> Gera
	</div>
</body>
</html>