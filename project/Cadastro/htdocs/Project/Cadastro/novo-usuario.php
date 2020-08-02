<?php
    include('config.php');
    if(isset($_POST['acao'])){
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];		
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];		
        $placa = $_POST['placa'];
        $Telefone = $_POST['Telefone'];
		
            $sql = $pdo->prepare("INSERT INTO usuario VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, null)");
            $sql->execute([$usuario, $senha, $email, $endereco, $numero, $complemento, $placa, $Telefone]);
    }   
	include('../Asset/menu.html');
?>

<html>

<body class="backGround">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<section class="container">
		<div class="row">
		<h3 class="center-align">Formulario de Registro - H4</h3>
			<article class="col s6 offset-s3">
				<form method="POST" ">
					<div class="input-field">
						<i class="material-icons prefix">perm_identity</i>
						<label for="usuario">usuario</label>
						<input type="text" name="usuario" required>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">person_pin</i>
						<label for="senha">Senha</label>
						<input type="password" name="senha" required>
					</div>
					
					<div class="input-field">
						<i class="material-icons prefix">email</i>
						<label for="email">Email</label>
						<input type="email" name="email" required>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">mode_edit</i>
						<label for="mensaje">endereco</label>
						<textarea name="endereco" id="" rows="10" class="materialize-textarea"  length="140" required></textarea>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">mode_edit</i>
						<label for="mensaje">numero</label>
						<textarea name="numero" id="" rows="10" class="materialize-textarea"  length="140" required></textarea>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">mode_edit</i>
						<label for="mensaje">complemento</label>
						<textarea name="complemento" id="" rows="10" class="materialize-textarea"  length="140" required></textarea>
					</div>
					
					<div class="input-field">
						<i class="material-icons prefix">mode_edit</i>
						<label for="placa">placa</label>
						<textarea name="placa" id="" rows="10" class="materialize-textarea"  length="140" required></textarea>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">mode_edit</i>
						<label for="Telefone">Telefone</label>
						<textarea name="Telefone" id="" rows="10" class="materialize-textarea"  length="140" required></textarea>
					</div>
					
					
					
					
					<p class="center-align">
						<button class="waves-effect waves-light btn" name="acao" value="Criar" type="submit"><i class="material-icons right">send</i>enviar</button>
					</p>

				</form>

			</article>
		</div>
	</section>


	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>



</body>
</html>