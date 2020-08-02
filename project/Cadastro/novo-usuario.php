<html>
<head>
<?php
include('../config.php');
    if(isset($_POST['acao'])){
        $usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
        $nome = $_POST['nome'];		
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];		
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];		
        $placa = $_POST['placa'];
        $Telefone = $_POST['Telefone'];
		
            $sql = $pdo->prepare("INSERT INTO usuario VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $sql->execute([$usuario, $senha, $nome, $sobrenome, $email, $endereco, $numero, $complemento, $placa, $Telefone]);
    }   
	include('../Asset/menu_cadastro.html');
?>
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../Asset/menu/style.css">
<link rel="stylesheet" href="../backgrounds.css">
<title>Sistema H4 CAR</title> </head>


<body class="bg1" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<section class="container Uzi">
		<div class="row">
		<h3 class=" title-v1 center-align">Formulario de Registro - H4</h3>
			<article class="form_O col s6 offset-s3">
				<form method="POST">
					<div class="input-field">
						<i class="material-icons prefix">person_pin</i>
						<label for="usuario">Usuario</label>
						<input type="text" required  required   placeholder ="exemplo123" name="usuario" required>
					</div>
					
					<div class="input-field">
						<i class="material-icons prefix">person_pin</i>
						<label for="mensaje">Nome</label>
						<textarea name="nome" id="" rows="10"   placeholder ="José" class="materialize-textarea"  length="140" required></textarea>
					</div>
					
					<div class="input-field">
						<i class="material-icons prefix">person_pin</i>
						<label for="mensaje">Sobrenome</label>
						<textarea name="sobrenome" id="" rows="10"  placeholder ="Silva" class="materialize-textarea"  length="140" required></textarea>
					</div>					
					
					<div class="input-field">
						<i class="material-icons prefix">person_pin</i>
						<label for="senha">Senha</label>
						<input type="password"  placeholder ="********"  name="senha" required>
					</div>
					
					<div class="input-field">
						<i class="material-icons prefix">person_pin</i>
						<label for="email">Email</label>
						<input type="email"  placeholder ="exemplo@gmail.com"  name="email" required>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">person_pin</i>
						<label for="mensaje">Endereço</label>
						<textarea type="text" placeholder ="Rua xxxxxx"  name="endereco" id="" rows="10" class="materialize-textarea"  length="140" required></textarea>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">person_pin</i>
						<label for="mensaje">numero</label>
						<textarea name="numero" placeholder ="01" id="" rows="10" class="materialize-textarea"  length="140" required></textarea>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">person_pin</i>
						<label for="mensaje">Complemento</label>
						<textarea name="complemento" placeholder ="Casa/Sobrado/Apartamento" id="" rows="10" class="materialize-textarea"  length="140" required></textarea>
					</div>
					
					<div class="input-field">
						<i class="material-icons prefix">person_pin</i>
						<label for="placa">Placa</label>
						<textarea name="placa" id="" placeholder ="ABC-1234" rows="10" class="materialize-textarea"  length="140" required></textarea>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">person_pin</i>
						<label for="Telefone">Telefone</label>
						<textarea name="Telefone"  placeholder ="11 98000000" id="" rows="10" class="materialize-textarea"  length="140" required></textarea>
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

<script language="javascript">
function HabCampos() {
    document.getElementById('campos').style.display = "none";
  }}
</script>