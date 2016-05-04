<html>
<head>
	<?php
		session_start();
	if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)):
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		header('location: ../../index.php');
	endif;
		$logado = $_SESSION['login']
	?>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/estilo.css">
</head>
<?php
	require_once('../../php/conexao.php');
	require_once('../../php/usuario.php');
	//CARREGA O MODULO DA PERGUNTA
	$sql = "SELECT * FROM perguntas WHERE modulo = 'WEB3'";
	$result = $PDO->prepare( $sql );
	$result->execute();
	$rows = $result->fetch(PDO::FETCH_ASSOC);
	//CARREGA O MODULO RESPOSTA
	header('Content-Type: text/html; charset=utf-8');
	$resposta_sql = "SELECT * FROM respostas WHERE id_user = '".$usuario_exibir['id_user']."' && respondeu = '".$rows['resposta']."'";
	$respostadb = $PDO->prepare($resposta_sql);
	$respostadb->execute();
	$respondeudb = $respostadb->rowCount();

/* VERIFICANDO SE JA FOI RESPONDIDA */
switch ($respondeudb) {
	case $respondeudb === "0":
?>
<body>
	<div id="questionweb1">
		<form method="POST">
			<fieldset>
				<legend>TERCEIRA PERGUNTA - WEB</legend>
					<label><?=$rows['pergunta'];?></label>
					<input id="respostaweb3" name="respostaweb3" class="text">
					<input type="submit" id="submitweb3" name="submitweb3" value="Responder" class="submit">
			</fieldset>
		</form>
	</div>
</body>
<?php
		break;
		case $respondeudb = "1":
		echo "<script>alert('Você ja respondeu está pergunta!')</script>";
		echo "<script>location.href='index.php'</script>";
		break;
}
?>
</html>