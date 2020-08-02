<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../Asset/menu/style.css">

    <title>Página Inicial</title>
</head>
<?php
session_start();
include('verifica_login.php');
?>
<body><?php include('../../Asset/menu/menu_superior_adm.html');?>
      <center>  <div class="container">
            </br>
            <div class="row">
                <p>
                </p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">usuario</th>
                            <th scope="col">email</th>
                            <th scope="col">endereco</th>
                            <th scope="col">numero</th>
							<th scope="col">complemento</th>
                            <th scope="col">placa</th>		
                        </tr>
                    </thead>
                    
					<tbody>
                        <?php
                        include '../../banco.php';
                        $pdo = Banco::conectar();
                        $sql = 'SELECT * FROM usuario ORDER BY usuario_id DESC';

                        foreach($pdo->query($sql)as $row)
                        {
                            echo '<tr>';
			                echo '<th scope="row">'. $row['usuario_id'] . '</th>';
                            echo '<td>'. $row['usuario'] . '</td>';
                            echo '<td>'. $row['email'] . '</td>';
                            echo '<td>'. $row['endereco'] . '</td>';
	                        echo '<td>'. $row['numero'] . '</td>';
                            echo '<td>'. $row['complemento'] . '</td>';						
                            echo '<td>'. $row['placa'] . '</td>';		
											
                            echo '<td width=1000>';
                       //  echo '<a class="btn btn-primary" href="read.php?usuario_id='.$row['usuario_id'].'">Info</a>';
                         echo ' ';
							echo '<a class="btn btn-warning" href="update.php?usuario_id='.$row['usuario_id'].'">Atualizar</a>';
                           echo ' ';
						   
						 echo '<a class="btn btn-danger" href="delete.php?usuario_id='.$row['usuario_id'].'">Excluir</a>';
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
