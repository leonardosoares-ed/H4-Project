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



$Carro = $_POST['Carro'];
$Placa = $_POST['Placa'];
$Type_Sol = $_POST['Type_Sol'];
$responsavel = $_POST['responsavel'];
$importancia = $_POST['importancia'];
$Usuario = $_POST['Usuario'];

    //Validação
    $validacao = true;
  

    // update data
    if ($validacao) {
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE pessoa  set Carro = ?, Placa = ?, Type_Sol = ?, responsavel = ?, importancia = ? WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($Carro, $Placa, $Type_Sol, $responsavel, $importancia, $id));
        Banco::desconectar();
        header("Location: index.php");
    }
} else {
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM pessoa where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    $Carro = $data['Carro'];
    $Type_Sol = $data['Type_Sol'];
    $responsavel = $data['responsavel'];
    $importancia = $data['importancia'];
    $Usuario = $data['Usuario'];
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
                        <label class="control-label">Carro</label>
                        <div class="controls">
                            <input name="Carro" class="form-control" size="50" type="text" placeholder="Carro"
                                   value="<?php echo !empty($Carro) ? $Carro : ''; ?>">
 
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Tipo</label>
                        <div class="controls">
                            <input name="Type_Sol" class="form-control" size="80" type="text" placeholder="Endereço"
                                   value="<?php echo !empty($Type_Sol) ? $Type_Sol : ''; ?>">

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
                        <label class="control-label">importancia</label>
                        <div class="controls">
                            <input name="importancia" class="form-control" size="40" type="text" placeholder="importancia"
                                   value="<?php echo !empty($importancia) ? $importancia : ''; ?>">

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
