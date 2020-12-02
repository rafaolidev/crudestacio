<?php
session_start();
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'db_connect.php';
	$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	//var_dump($dados);
	$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
	
	$result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha, cpf,rg, cartao, bairro, cidade, tipoServico) VALUES (
					'" .$dados['nome']. "',
					'" .$dados['email']. "',
					'" .$dados['usuario']. "',
					'" .$dados['senha']. "',
					'" .$dados['cpf']. "',
					'" .$dados['rg']. "',
					'" .$dados['cartao']. "',
					'" .$dados['bairro']. "',
                    '" .$dados['cidade']. "',
					'" .$dados['tipoServico']. "'
					)";
	$resultado_usario = mysqli_query($connect, $result_usuario);
	if(mysqli_insert_id($connect)){
		$_SESSION['msgcad'] = "Usuário cadastrado com sucesso";
        header("Location: ../index.php");
	}else{
		$_SESSION['msg'] = "Erro ao cadastrar o usuário";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastrocon.css">
    <title>Cadastro Clientes</title>
</head>

<body>
    <div class="module" style="margin-top: 100px;">
    <?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
        <form method="POST" class="form" action=""> 
            <h1>Cadastro Clientes</h1><br>
            <span>Nome:</span>
			<input type="text" name="nome" class="textbox" placeholder="Digite o nome e o sobrenome">
			<span>E-mail:</span>
            <input type="email" name="email" class="textbox" placeholder="Digite o seu e-mail">
            <span>Confirme seu E-mail:</span>
			<input type="email" name="usuario" class="textbox" placeholder="Confirme seu E-mail:">
			<span>Senha:</span>
			<input type="password" name="senha" class="textbox" placeholder="Digite a senha">
			<span>CPF:</span>
			<input type="text" name="cpf" class="textbox" placeholder="digite seu cpf">
			<span>RG:</span>
			<input type="text" name="rg" class="textbox" placeholder="digite seu rg">
			<span>Cartão:</span>
			<input type="text" name="cartao" class="textbox" placeholder="numero do cartão">
			<span>Bairro</span>
			<input type="text" name="bairro" class="textbox" placeholder="Estado em que reside">
			<span>Cidade:</span>
			<input type="text" name="cidade" class="textbox" placeholder="Cidade">
			<input type="submit" name="btnCadUsuario" class="button" value="Cadastrar">
        </form>
    </div>
</body>

</html>