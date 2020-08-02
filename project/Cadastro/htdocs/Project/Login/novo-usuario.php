<?php
include('../Asset/menu.html');
?>

<html>

<body class="backGround">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<section class="container">
		<div class="row">
		<h3 class="center-align">Formulario de Login - H4</h3>
			<article class="col s6 offset-s3">
				<form method="post" action="ope.php" id="formlogin" name="formlogin" >
					<div class="input-field">
						<i class="material-icons prefix">perm_identity</i>
						<label for="usuario">usuario</label>
						<input type="text" name="usuario" id="usuario"required>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">person_pin</i>
						<label for="senha">Senha</label>
						<input type="password" name="senha" id="senha" required>
					</div>
					<p class="center-align">
						<button class="waves-effect waves-light btn" value="LOGAR  " type="submit"><i class="material-icons right">send</i>Entrar</button>
					</p>

				</form>

			</article>
		</div>
	</section>


	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>



</body>
</html>