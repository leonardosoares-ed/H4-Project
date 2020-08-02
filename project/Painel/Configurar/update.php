<?php

require '../../banco.php';

$usuario_id = null;
if (!empty($_GET['usuario_id'])) {
    $usuario_id = $_REQUEST['usuario_id'];
}

if (null == $usuario_id) {
    header("Location: index.php");
}

if (!empty($_POST)) {
	$usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $placa = $_POST['placa'];
    $Telefone = $_POST['placa'];

    $valusuario_idacao = true;

    if ($valusuario_idacao) {
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE usuario  set usuario = ?, senha = ?, email = ?, endereco = ?, numero = ?, complemento = ?, placa = ?, Telefone = ? WHERE usuario_id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($usuario, $senha, $email, $endereco, $numero, $complemento, $placa, $Telefone, $usuario_id));
        Banco::desconectar();
        header("Location: index.php");
    }
} else {
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM usuario where usuario_id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($usuario_id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    $usuario = $data['usuario'];
    $senha = $data['senha'];
    $email = $data['email'];
	$endereco = $data['endereco'];
    $numero = $data['numero'];
    $complemento = $data['complemento'];
    $placa = $data['placa'];	
    $usuario_id = $data['usuario_id'];		
    Banco::desconectar();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- using new bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Atualizar Contato</title>
</head>

<body>
<div class="container">

    <div class="span10 offset1">
        <div class="card">
            <div class="card-header">
                <h3 class="well"> Atualizar Contato </h3>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="update.php?usuario_id=<?php echo $usuario_id ?>" method="post">

                    <div class="control-group">
                        <label class="control-label">usuario</label>
                        <div class="controls">
                            <input  name="usuario" class="form-control"  size="50" type="text" placeholder="usuario"
                                   value="<?php echo !empty($usuario) ? $usuario : ''; ?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">senha</label>
                        <div class="controls">
                            <input name="senha" class="form-control" size="80" type="password" placeholder="carro"
                                   value="<?php echo !empty($senha) ? $senha : ''; ?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">email</label>
                        <div class="controls">
                            <input name="email" class="form-control" size="30" type="text" placeholder="email"
                                   value="<?php echo !empty($email) ? $email : ''; ?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">endereco</label>
                        <div class="controls">
                            <input name="endereco" class="form-control" size="30" type="text" placeholder="endereco"
                                   value="<?php echo !empty($endereco) ? $endereco : ''; ?>">
                        </div>
                    </div>
					
                    <div class="control-group">
                        <label class="control-label">numero</label>
                        <div class="controls">
                            <input name="numero" class="form-control" size="30" type="text" placeholder="numero"
                                   value="<?php echo !empty($numero) ? $numero : ''; ?>">
                        </div>
                    </div>
					
					                    <div class="control-group">
                        <label class="control-label">placa</label>
                        <div class="controls">
                            <input name="placa" class="form-control" size="30" type="text" placeholder="placa"
                                   value="<?php echo !empty($placa) ? $placa : ''; ?>">
                        </div>
                    </div>
					
                    <div class="control-group">
                        <label class="control-label">complemento</label>
                        <div class="controls">
                            <input name="complemento" class="form-control" size="30" type="text" placeholder="complemento"
                                   value="<?php echo !empty($complemento) ? $complemento : ''; ?>">
                        </div>
                    </div>


					
					
                    <br/>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-warning">Atualizar</button>
                        <a href="index.php" type="btn" class="btn btn-default">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
