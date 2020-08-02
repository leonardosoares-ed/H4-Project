

                        <?php
include 'banco.php';
$pdo = Banco::conectar();
$sql = "SELECT * FROM usuario WHERE usuario = '$var2'";

foreach($pdo->query($sql)as $row)
                      {
                      //      echo '<tr>';
			                $User_usuario_id =  $row['usuario_id'];
                            $User_usuario =  $row['usuario'];
//$User_email =  $row['email'] . '<br/>';
                         //   $User_endereco =  $row['endereco'] . '<br/>';
//$User_numero =  $row['numero'] . '<br/>';
						//	$User_complemento =  $row['complemento'] . '<br/>';						
//$User_telefone =  $row['telefone'] . '<br/>';																			
                        }

                   //     $sql = "SELECT * FROM Agendamento WHERE usuario = '$var2'";

                    //    foreach($pdo->query($sql)as $row)
//{
                    //    echo '<tr>';
//echo 	$Ag_id =  $row['id'] . '<br/>';
//echo   $Ag_id_veiculo =  $row['id_veiculo'] . '<br/>';
//echo   $Ag_id_usuario =  $row['id_usuario'] . '<br/>';
              //          echo   $Ag_usuario =  $row['usuario'] . '<br/>';
             //           echo   $Ag_descricao =  $row['descricao'] . '<br/>';
//echo   $Ag_data_inicio =  $row['data_inicio'] . '<br/>';
//echo  $Ag_data_finalizacao =  $row['data_finalizacao'] . '<br/>';
//echo	$Ag_dataUm =  $row['dataUm'] . '<br/>';						
				//		echo	$Ag_dataDois =  $row['dataDois'] . '<br/>';						
              //          }

//$sql = "SELECT * FROM Veiculo WHERE usuario = '$var2'";


//foreach($pdo->query($sql)as $row)
                       // {
             //               echo '<tr>';
			     //           $Veiculo_id =  $row['id'] . '<br/>';
            //                $Veiculo_marca =  $row['marca'] . '<br/>';
//$Veiculo_modelo =  $row['modelo'] . '<br/>';
             //               $Veiculo_ano_fabricacao =  $row['ano_fabricacao'] . '<br/>';
				//			$Veiculo_placa =  $row['placa'] . '<br/>';
	             //           $Veiculo_kmRodado =  $row['kmRodado'] . '<br/>';						
                  //      }
				                																							
						
					
						
                        ?>
						
						
						
				
    
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script></center>
</body>

</html>
