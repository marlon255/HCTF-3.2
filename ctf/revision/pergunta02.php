<?php
		session_start();
	if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)):
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		header('location: ../../index.php');
	endif;
		$logado = $_SESSION['login']
?>
<?php
	require_once('../../php/conexao.php');
	require_once('../../php/usuario.php');
	//CARREGA O MODULO DA PERGUNTA
	$sql = "SELECT * FROM perguntas WHERE modulo = 'REV2'";
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
	<div id="questionweb1">
		<form method="POST">
			<fieldset>
				<legend>SEGUNDA PERGUNTA - REVISION</legend>
				<div>
					<label><?=$rows['pergunta'];?></label>
					<input id="respostarevision2" name="respostarevision2" class="text">
					<input type="submit" id="submitrevision2" name="submitrevision2" value="Responder" class="submit">
				</div>
			</fieldset>
		</form>
	</div>
<?php
		break;
		case $respondeudb = "1":
		echo "<script>alert('Você ja respondeu está pergunta!')</script>";
		echo "<script>location.href='../../home.php'</script>";
		break;
}
?>