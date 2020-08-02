<?php

require 'banco.php';

$id = null;
if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if (null == $id) {
    header("Location: index.php");
}

if (!empty($_POST)) {
	$descricao = $_POST['descricao'];
    $data_inicio = $_POST['data_inicio'];
    $data_finalizacao = $_POST['data_finalizacao'];


    $validacao = true;

    if ($validacao) {
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE Agendamento  set descricao = ?, data_inicio = ?, data_finalizacao = ? WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($descricao, $data_inicio, $data_finalizacao, $id));
        Banco::desconectar();
        header("Location: index.php");
    }
} else {
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM Agendamento where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    $descricao = $data['descricao'];
    $data_inicio = $data['data_inicio'];
    $data_finalizacao = $data['data_finalizacao'];	
    $id = $data['id'];		

	
	
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
                <form class="form-horizontal" action="update.php?id=<?php echo $id ?>" method="post">

                    <div class="control-group">
                        <label class="control-label">usuario</label>
                        <div class="controls">
                            <input name="usuario" class="form-control" size="50" type="text" placeholder="usuario"
                                   value="<?php echo !empty($usuario) ? $usuario : ''; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">carro</label>
                        <div class="controls">
                            <input name="carro" class="form-control" size="50" type="text" placeholder="carro"
                                   value="<?php echo !empty($carro) ? $carro : ''; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">placa</label>
                        <div class="controls">
                            <input name="placa" class="form-control" size="80" type="text" placeholder="placa"
                                   value="<?php echo !empty($placa) ? $placa : ''; ?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">tipo</label>
                        <div class="controls">
                            <input name="tipo" class="form-control" size="30" type="text" placeholder="tipo"
                                   value="<?php echo !empty($tipo) ? $tipo : ''; ?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">responsavel</label>
                        <div class="controls">
                            <input name="responsavel" class="form-control" size="30" type="text" placeholder="responsavel"
                                   value="<?php echo !empty($responsavel) ? $responsavel : ''; ?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">previsao</label>
                        <div class="controls">
                            <input name="previsao" class="form-control" size="30" type="text" placeholder="previsao"
                                   value="<?php echo !empty($previsao) ? $previsao : ''; ?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">status</label>
                        <div class="controls">
                            <input name="status" class="form-control" size="30" type="text" placeholder="status"
                                   value="<?php echo !empty($status) ? $status : ''; ?>">
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
