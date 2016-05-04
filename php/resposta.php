<?php
	if(isset($_POST['submitweb1'])){
		$sql = "SELECT * FROM perguntas WHERE modulo = 'WEB1'";
		$result = $PDO->prepare( $sql );
		$result->execute();
		$rows = $result->fetch(PDO::FETCH_ASSOC);
		$respostaweb1 = $_POST['respostaweb1'];
		$respostaweb1db = $rows['resposta'];
		switch ($respostaweb1) {
			case $respostaweb1 === NULL:
				echo "<script>alert('Digite uma resposta.')</script>";
			break;
			case $respostaweb1 === $respostaweb1db:
			/* ADICIONANDO O PONTO DA QUESTAO AO USUARIO */
				$ponto_user = $usuario_exibir['pontos'];
				$pontoweb1db = $rows['valor'];
				$ponto_new = $ponto_user+$pontoweb1db;
				$sql_ponto = "UPDATE users SET pontos='".$ponto_new."' WHERE id_user = '".$usuario_exibir['id_user']."'";
				$result_ponto = $PDO->prepare($sql_ponto);
				$result_ponto->execute();
			/* ADICIONANDO A QUESTAO NA TABELA QUANDO TIVER CORRETO */
				$id_user = $usuario_exibir['id_user'];
				$id_pergunta = $rows['id'];
				$resposta = $_POST['respostaweb1'];
				$sql_question = "INSERT INTO respostas (id_user, id_pergunta, respondeu) VALUES ('$id_user','$id_pergunta','$resposta')";
				$question = $PDO->prepare($sql_question);
				$question->execute();
				echo "<script>alert('Sua resposta está correta. Parabêns, vá para a próxima pergunta!')</script>";
				echo "<script>location.href='index.php'</script>";
				break;
			case $respostaweb1 !== $respostaweb1db:
				echo "<script>alert('Sua resposta não está correta, tente novamente!');</script>";
				break;
		}
	}
	if(isset($_POST['submitweb2'])){
		$sql = "SELECT * FROM perguntas WHERE modulo = 'WEB2'";
		$result = $PDO->prepare( $sql );
		$result->execute();
		$rows = $result->fetch(PDO::FETCH_ASSOC);
		$respostaweb2 = $_POST['respostaweb2'];
		$respostaweb2db = $rows['resposta'];
		switch ($respostaweb2) {
			case $respostaweb2 === NULL:
				echo "<script>alert('Digite alguma resposta!')</script>";
			break;
			case $respostaweb2 === $respostaweb2db:
			/* ADICIONANDO O PONTO DA QUESTAO AO USUARIO */
				$ponto_user = $usuario_exibir['pontos'];
				$pontoweb2db = $rows['valor'];
				$ponto_new = $ponto_user+$pontoweb2db;
				$sql_ponto = "UPDATE users SET pontos='".$ponto_new."' WHERE id_user = '".$usuario_exibir['id_user']."'";
				$result_ponto = $PDO->prepare($sql_ponto);
				$result_ponto->execute();
			/* ADICIONANDO A QUESTAO NA TABELA QUANDO TIVER CORRETO */
				$id_user = $usuario_exibir['id_user'];
				$id_pergunta = $rows['id'];
				$resposta = $_POST['respostaweb2'];
				$sql_question = "INSERT INTO respostas (id_user, id_pergunta, respondeu) VALUES ('$id_user','$id_pergunta','$resposta')";
				$question = $PDO->prepare($sql_question);
				$question->execute();
				echo "<script>alert('Sua resposta está correta. Parabêns, vá para a próxima pergunta!')</script>";
				echo "<script>location.href='index.php'</script>";
				break;
			case $respostaweb2 !== $respostaweb2db:
				echo "<script>alert('Sua resposta não está correta, tente novamente!');</script>";
				break;
		}
	}
	if(isset($_POST['submitweb3'])){
		$sql = "SELECT * FROM perguntas WHERE modulo = 'WEB3'";
		$result = $PDO->prepare( $sql );
		$result->execute();
		$rows = $result->fetch(PDO::FETCH_ASSOC);
		$respostaweb3 = $_POST['respostaweb3'];
		$respostaweb3db = $rows['resposta'];
		switch ($respostaweb3) {
			case $respostaweb3 === NULL:
				echo "<script>alert('Digite uma resposta.')</script>";
			break;
			case $respostaweb3 === $respostaweb3db:
			/* ADICIONANDO O PONTO DA QUESTAO AO USUARIO */
				$ponto_user = $usuario_exibir['pontos'];
				$pontoweb3db = $rows['valor'];
				$ponto_new = $ponto_user+$pontoweb3db;
				$sql_ponto = "UPDATE users SET pontos='".$ponto_new."' WHERE id_user = '".$usuario_exibir['id_user']."'";
				$result_ponto = $PDO->prepare($sql_ponto);
				$result_ponto->execute();
			/* ADICIONANDO A QUESTAO NA TABELA QUANDO TIVER CORRETO */
				$id_user = $usuario_exibir['id_user'];
				$id_pergunta = $rows['id'];
				$resposta = $_POST['respostaweb3'];
				$sql_question = "INSERT INTO respostas (id_user, id_pergunta, respondeu) VALUES ('$id_user','$id_pergunta','$resposta')";
				$question = $PDO->prepare($sql_question);
				$question->execute();
				echo "<script>alert('Sua resposta está correta. Parabêns, vá para a próxima pergunta!')</script>";
				break;
			case $respostaweb3 !== $respostaweb3db:
				echo "<script>alert('Sua resposta não está correta, tente novamente!');</script>";
				break;
		}
	}
	if(isset($_POST['submitrevision1'])){
		$sql = "SELECT * FROM perguntas WHERE modulo = 'REV1'";
		$result = $PDO->prepare( $sql );
		$result->execute();
		$rows = $result->fetch(PDO::FETCH_ASSOC);
		$respostarevision1 = $_POST['respostarevision1'];
		$respostarevision1db = $rows['resposta'];
		switch ($respostarevision1) {
			case $respostarevision1 === NULL:
				echo "<script>alert('Digite uma resposta.')</script>";
			break;
			case $respostarevision1 === $respostarevision1db:
			/* ADICIONANDO O PONTO DA QUESTAO AO USUARIO */
				$ponto_user = $usuario_exibir['pontos'];
				$pontorevision1db = $rows['valor'];
				$ponto_new = $ponto_user+$pontorevision1db;
				$sql_ponto = "UPDATE users SET pontos='".$ponto_new."' WHERE id_user = '".$usuario_exibir['id_user']."'";
				$result_ponto = $PDO->prepare($sql_ponto);
				$result_ponto->execute();
			/* ADICIONANDO A QUESTAO NA TABELA QUANDO TIVER CORRETO */
				$id_user = $usuario_exibir['id_user'];
				$id_pergunta = $rows['id'];
				$resposta = $_POST['respostarevision1'];
				$sql_question = "INSERT INTO respostas (id_user, id_pergunta, respondeu) VALUES ('$id_user','$id_pergunta','$resposta')";
				$question = $PDO->prepare($sql_question);
				$question->execute();
				echo "<script>alert('Sua resposta está correta. Parabêns, vá para a próxima pergunta!')</script>";
				echo "<script>location.href='../../home.php'</script>";
				break;
			case $respostarevision1 !== $respostarevision1db:
				echo "<script>alert('Sua resposta não está correta, tente novamente!');</script>";
				break;
		}
	}
	if(isset($_POST['submitrevision2'])){
		$sql = "SELECT * FROM perguntas WHERE modulo = 'REV2'";
		$result = $PDO->prepare( $sql );
		$result->execute();
		$rows = $result->fetch(PDO::FETCH_ASSOC);
		$respostarevision2 = $_POST['respostarevision2'];
		$respostarevision2db = $rows['resposta'];
		switch ($respostarevision2) {
			case $respostarevision2 === NULL:
				echo "<script>alert('Digite uma resposta.')</script>";
			break;
			case $respostarevision2 === $respostarevision2db:
			/* ADICIONANDO O PONTO DA QUESTAO AO USUARIO */
				$ponto_user = $usuario_exibir['pontos'];
				$pontorevision2db = $rows['valor'];
				$ponto_new = $ponto_user+$pontorevision2db;
				$sql_ponto = "UPDATE users SET pontos='".$ponto_new."' WHERE id_user = '".$usuario_exibir['id_user']."'";
				$result_ponto = $PDO->prepare($sql_ponto);
				$result_ponto->execute();
			/* ADICIONANDO A QUESTAO NA TABELA QUANDO TIVER CORRETO */
				$id_user = $usuario_exibir['id_user'];
				$id_pergunta = $rows['id'];
				$resposta = $_POST['respostarevision2'];
				$sql_question = "INSERT INTO respostas (id_user, id_pergunta, respondeu) VALUES ('$id_user','$id_pergunta','$resposta')";
				$question = $PDO->prepare($sql_question);
				$question->execute();
				echo "<script>alert('Sua resposta está correta. Parabêns, vá para a próxima pergunta!')</script>";
				echo "<script>location.href='../../home.php'</script>";
				break;
			case $respostarevision2 !== $respostarevision2db:
				echo "<script>alert('Sua resposta não está correta, tente novamente!');</script>";
				break;
		}
	}
	if(isset($_POST['submitrevision3'])){
		$sql = "SELECT * FROM perguntas WHERE modulo = 'WEB3'";
		$result = $PDO->prepare( $sql );
		$result->execute();
		$rows = $result->fetch(PDO::FETCH_ASSOC);
		$respostarevision3 = $_POST['respostarevision3'];
		$respostarevision3db = $rows['resposta'];
		switch ($respostarevision3) {
			case $respostarevision3 === NULL:
				echo "<script>alert('Digite uma resposta.')</script>";
			break;
			case $respostarevision3 === $respostarevision3db:
			/* ADICIONANDO O PONTO DA QUESTAO AO USUARIO */
				$ponto_user = $usuario_exibir['pontos'];
				$pontorevision3db = $rows['valor'];
				$ponto_new = $ponto_user+$pontorevision3db;
				$sql_ponto = "UPDATE users SET pontos='".$ponto_new."' WHERE id_user = '".$usuario_exibir['id_user']."'";
				$result_ponto = $PDO->prepare($sql_ponto);
				$result_ponto->execute();
			/* ADICIONANDO A QUESTAO NA TABELA QUANDO TIVER CORRETO */
				$id_user = $usuario_exibir['id_user'];
				$id_pergunta = $rows['id'];
				$resposta = $_POST['respostarevision3'];
				$sql_question = "INSERT INTO respostas (id_user, id_pergunta, respondeu) VALUES ('$id_user','$id_pergunta','$resposta')";
				$question = $PDO->prepare($sql_question);
				$question->execute();
				echo "<script>alert('Sua resposta está correta. Parabêns, vá para a próxima pergunta!')</script>";
				echo "<script>location.href='../../home.php'</script>";
				break;
			case $respostarevision3 !== $respostarevision3db:
				echo "<script>alert('Sua resposta não está correta, tente novamente!');</script>";
				break;
		}
	}
	if(isset($_POST['submitcrypto1'])){
		$sql = "SELECT * FROM perguntas WHERE modulo = 'CRIPTO1'";
		$result = $PDO->prepare( $sql );
		$result->execute();
		$rows = $result->fetch(PDO::FETCH_ASSOC);
		$respostacrypto1 = $_POST['respostacrypto1'];
		$respostacrypto1db = $rows['resposta'];
		switch ($respostacrypto1) {
			case $respostacrypto1 === NULL:
				echo "<script>alert('Digite uma resposta.')</script>";
			break;
			case $respostacrypto1 === $respostacrypto1db:
			/* ADICIONANDO O PONTO DA QUESTAO AO USUARIO */
				$ponto_user = $usuario_exibir['pontos'];
				$pontocrypto1db = $rows['valor'];
				$ponto_new = $ponto_user+$pontocrypto1db;
				$sql_ponto = "UPDATE users SET pontos='".$ponto_new."' WHERE id_user = '".$usuario_exibir['id_user']."'";
				$result_ponto = $PDO->prepare($sql_ponto);
				$result_ponto->execute();
			/* ADICIONANDO A QUESTAO NA TABELA QUANDO TIVER CORRETO */
				$id_user = $usuario_exibir['id_user'];
				$id_pergunta = $rows['id'];
				$resposta = $_POST['respostacrypto1'];
				$sql_question = "INSERT INTO respostas (id_user, id_pergunta, respondeu) VALUES ('$id_user','$id_pergunta','$resposta')";
				$question = $PDO->prepare($sql_question);
				$question->execute();
				echo "<script>alert('Sua resposta está correta. Parabêns, vá para a próxima pergunta!')</script>";
				echo "<script>location.href='../../home.php'</script>";
				break;
			case $respostacrypto1 !== $respostacrypto1db:
				echo "<script>alert('Sua resposta não está correta, tente novamente!');</script>";
				break;
		}
	}
	if(isset($_POST['submitcustom1'])){
		$sql = "SELECT * FROM perguntas WHERE modulo = 'CUSTOM1'";
		$result = $PDO->prepare( $sql );
		$result->execute();
		$rows = $result->fetch(PDO::FETCH_ASSOC);
		$respostacustom1 = $_POST['respostacustom1'];
		$respostacustom1db = $rows['resposta'];
		switch ($respostacustom1) {
			case $respostacustom1 === NULL:
				echo "<script>alert('Digite uma resposta.')</script>";
			break;
			case $respostacustom1 === $respostacustom1db:
			/* ADICIONANDO O PONTO DA QUESTAO AO USUARIO */
				$ponto_user = $usuario_exibir['pontos'];
				$pontocustom1db = $rows['valor'];
				$ponto_new = $ponto_user+$pontocustom1db;
				$sql_ponto = "UPDATE users SET pontos='".$ponto_new."' WHERE id_user = '".$usuario_exibir['id_user']."'";
				$result_ponto = $PDO->prepare($sql_ponto);
				$result_ponto->execute();
			/* ADICIONANDO A QUESTAO NA TABELA QUANDO TIVER CORRETO */
				$id_user = $usuario_exibir['id_user'];
				$id_pergunta = $rows['id'];
				$resposta = $_POST['respostacustom1'];
				$sql_question = "INSERT INTO respostas (id_user, id_pergunta, respondeu) VALUES ('$id_user','$id_pergunta','$resposta')";
				$question = $PDO->prepare($sql_question);
				$question->execute();
				echo "<script>alert('Sua resposta está correta. Parabêns, vá para a próxima pergunta!')</script>";
				echo "<script>location.href='../../home.php'</script>";
				break;
			case $respostacustom1 !== $respostacustom1db:
				echo "<script>alert('Sua resposta não está correta, tente novamente!');</script>";
				break;
		}
	}
	if(isset($_POST['submitcrypto2'])){
		$sql = "SELECT * FROM perguntas WHERE modulo = 'CRIPTO2'";
		$result = $PDO->prepare( $sql );
		$result->execute();
		$rows = $result->fetch(PDO::FETCH_ASSOC);
		$respostacrypto2 = $_POST['respostacrypto2'];
		$respostacrypto2db = $rows['resposta'];
		switch ($respostacrypto2) {
			case $respostacrypto2 === NULL:
				echo "<script>alert('Digite uma resposta.')</script>";
			break;
			case $respostacrypto2 === $respostacrypto2db:
			/* ADICIONANDO O PONTO DA QUESTAO AO USUARIO */
				$ponto_user = $usuario_exibir['pontos'];
				$pontocrypto2db = $rows['valor'];
				$ponto_new = $ponto_user+$pontocrypto2db;
				$sql_ponto = "UPDATE users SET pontos='".$ponto_new."' WHERE id_user = '".$usuario_exibir['id_user']."'";
				$result_ponto = $PDO->prepare($sql_ponto);
				$result_ponto->execute();
			/* ADICIONANDO A QUESTAO NA TABELA QUANDO TIVER CORRETO */
				$id_user = $usuario_exibir['id_user'];
				$id_pergunta = $rows['id'];
				$resposta = $_POST['respostacrypto2'];
				$sql_question = "INSERT INTO respostas (id_user, id_pergunta, respondeu) VALUES ('$id_user','$id_pergunta','$resposta')";
				$question = $PDO->prepare($sql_question);
				$question->execute();
				echo "<script>alert('Sua resposta está correta. Parabêns, vá para a próxima pergunta!')</script>";
				echo "<script>location.href='../../home.php'</script>";
				break;
			case $respostacrypto2 !== $respostacrypto2db:
				echo "<script>alert('Sua resposta não está correta, tente novamente!');</script>";
				break;
		}
	}
	if(isset($_POST['submitcrypto3'])){
		$sql = "SELECT * FROM perguntas WHERE modulo = 'CRIPTO3'";
	$result = $PDO->prepare( $sql );
	$result->execute();
	$rows = $result->fetch(PDO::FETCH_ASSOC);
		$respostacrypto3 = $_POST['respostacrypto3'];
		$respostacrypto3db = $rows['resposta'];
		switch ($respostacrypto3) {
			case $respostacrypto3 === NULL:
				echo "<script>alert('Digite uma resposta.')</script>";
			break;
			case $respostacrypto3 === $respostacrypto3db:
			/* ADICIONANDO O PONTO DA QUESTAO AO USUARIO */
				$ponto_user = $usuario_exibir['pontos'];
				$pontocrypto3db = $rows['valor'];
				$ponto_new = $ponto_user+$pontocrypto3db;
				$sql_ponto = "UPDATE users SET pontos='".$ponto_new."' WHERE id_user = '".$usuario_exibir['id_user']."'";
				$result_ponto = $PDO->prepare($sql_ponto);
				$result_ponto->execute();
			/* ADICIONANDO A QUESTAO NA TABELA QUANDO TIVER CORRETO */
				$id_user = $usuario_exibir['id_user'];
				$id_pergunta = $rows['id'];
				$resposta = $_POST['respostacrypto3'];
				$sql_question = "INSERT INTO respostas (id_user, id_pergunta, respondeu) VALUES ('$id_user','$id_pergunta','$resposta')";
				$question = $PDO->prepare($sql_question);
				$question->execute();
				echo "<script>alert('Sua resposta está correta. Parabêns, vá para a próxima pergunta!')</script>";
				echo "<script>location.href='../../home.php'</script>";
				break;
			case $respostacrypto3 !== $respostacrypto3db:
				echo "<script>alert('Sua resposta não está correta, tente novamente!');</script>";
				break;
		}
	}
	if(isset($_POST['submitcustom2'])){
		$sql = "SELECT * FROM perguntas WHERE modulo = 'CUSTOM2'";
		$result = $PDO->prepare( $sql );
		$result->execute();
		$rows = $result->fetch(PDO::FETCH_ASSOC);
		$respostacustom2 = $_POST['respostacustom2'];
		$respostacustom2db = $rows['resposta'];
		switch ($respostacustom2) {
			case $respostacustom2 === NULL:
				echo "<script>alert('Digite uma resposta.')</script>";
			break;
			case $respostacustom2 === $respostacustom2db:
			/* ADICIONANDO O PONTO DA QUESTAO AO USUARIO */
				$ponto_user = $usuario_exibir['pontos'];
				$pontocustom2db = $rows['valor'];
				$ponto_new = $ponto_user+$pontocustom2db;
				$sql_ponto = "UPDATE users SET pontos='".$ponto_new."' WHERE id_user = '".$usuario_exibir['id_user']."'";
				$result_ponto = $PDO->prepare($sql_ponto);
				$result_ponto->execute();
			/* ADICIONANDO A QUESTAO NA TABELA QUANDO TIVER CORRETO */
				$id_user = $usuario_exibir['id_user'];
				$id_pergunta = $rows['id'];
				$resposta = $_POST['respostacustom2'];
				$sql_question = "INSERT INTO respostas (id_user, id_pergunta, respondeu) VALUES ('$id_user','$id_pergunta','$resposta')";
				$question = $PDO->prepare($sql_question);
				$question->execute();
				echo "<script>alert('Sua resposta está correta. Parabêns, vá para a próxima pergunta!')</script>";
				echo "<script>location.href='../../home.php'</script>";
				break;
			case $respostacustom2 !== $respostacustom2db:
				echo "<script>alert('Sua resposta não está correta, tente novamente!');</script>";
				break;
		}
	}
	if(isset($_POST['submitcustom3'])){
		$sql = "SELECT * FROM perguntas WHERE modulo = 'CUSTOM3'";
		$result = $PDO->prepare( $sql );
		$result->execute();
		$rows = $result->fetch(PDO::FETCH_ASSOC);
		$respostacustom3 = $_POST['respostacustom3'];
		$respostacustom3db = $rows['resposta'];
		switch ($respostacustom3) {
			case $respostacustom3 === NULL:
				echo "<script>alert('Digite uma resposta.')</script>";
			break;
			case $respostacustom3 === $respostacustom3db:
			/* ADICIONANDO O PONTO DA QUESTAO AO USUARIO */
				$ponto_user = $usuario_exibir['pontos'];
				$pontocustom3db = $rows['valor'];
				$ponto_new = $ponto_user+$pontocustom3db;
				$sql_ponto = "UPDATE users SET pontos='".$ponto_new."' WHERE id_user = '".$usuario_exibir['id_user']."'";
				$result_ponto = $PDO->prepare($sql_ponto);
				$result_ponto->execute();
			/* ADICIONANDO A QUESTAO NA TABELA QUANDO TIVER CORRETO */
				$id_user = $usuario_exibir['id_user'];
				$id_pergunta = $rows['id'];
				$resposta = $_POST['respostacustom3'];
				$sql_question = "INSERT INTO respostas (id_user, id_pergunta, respondeu) VALUES ('$id_user','$id_pergunta','$resposta')";
				$question = $PDO->prepare($sql_question);
				$question->execute();
				echo "<script>alert('Sua resposta está correta. Parabêns, vá para a próxima pergunta!')</script>";
				echo "<script>location.href='../../home.php'</script>";
				break;
			case $respostacustom3 !== $respostacustom3db:
				echo "<script>alert('Sua resposta não está correta, tente novamente!');</script>";
				break;
		}
	}
?>