<?php
session_start();
include('verifica_login.php');
$var2= $_SESSION['usuario'];
?>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../Asset/menu/style.css">
	<link rel="stylesheet" href="../../backgrounds.css">
    <title>Página Inicial</title>
</head>

<body class="bg5" ><?php include('../../Asset/menu/menu_superior.html');?>
      <center>  <div class="container">

            </br>
            <div class="col-md-1 col-md-offset-5">
                <p>
                </p>
                <table class=" table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">id_usuario</th>
                            <th scope="col">usuario</th>
                            <th scope="col">descricao</th>
                            <th scope="col">data_inicio</th>
							<th scope="col">data_finalizacao</th>
                            <th scope="col">Ação</th>								
                        </tr>
                    </thead>
                    
					<tbody>
                        <?php
                        include '../../banco.php';
                        $pdo = Banco::conectar();
                        $sql = "SELECT * FROM Agendamento WHERE usuario = '$var2'";

                        foreach($pdo->query($sql)as $row)
                        {
                            echo '<tr>';
			                echo '<th scope="row">'. $row['id'] . '</th>';
                            //echo '<td>'. $row['id_veiculo'] . '</td>';
                            echo '<td>'. $row['id_usuario'] . '</td>';
							echo '<td>'. $row['usuario'] . '</td>';
                            echo '<td>'. $row['descricao'] . '</td>';
                            echo '<td>'. $row['data_inicio'] . '</td>';
                            echo '<td>'. $row['data_finalizacao'] . '</td>';				
							
							
                            echo '<td width=1000>';
                         //   echo '<a class="btn btn-primary" href="read.php?id='.$row['id'].'">Info</a>';
                         //   echo ' ';
							//echo '<a class="btn btn-warning" href="update.php?id='.$row['id'].'">Atualizar</a>';
                        //    echo ' ';
						echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Excluir</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        Banco::desconectar();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script></center>
</body>

</html>
