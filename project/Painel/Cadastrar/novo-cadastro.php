<?php
ob_start();
session_start();
include('verifica_login.php');
$var2= $_SESSION['usuario'];
ob_end_flush();
 ?>

<?php
    include('../../config.php');
    include('../../Dados.php');
	
    if(isset($_POST['acao'])){
		$id = null;
        $id_usuario = $User_usuario_id;
        $Usuario = $var2;
        $marca = $_POST['marca'];
        $modelo= $_POST['modelo'];
	    $ano_fabricacao= $_POST['ano_fabricacao'];		
	    $placa= $_POST['placa'];
	    $kmRodado= $_POST['kmRodado'];
        $id_veiculo = null;
        $descricao = $_POST['descricao'];
        $data_inicio= $_POST['data_inicio'];
	    $data_finalizacao= $_POST['data_finalizacao'];
        $dataUm= 0;
	    $dataDois = 0;
		
		$sql = $pdo->prepare("INSERT INTO Veiculo VALUES (?, ?, ?, ?, ?, ?, ?,? )");
		$sql->execute([$id, $User_usuario_id, $Usuario, $marca, $modelo, $ano_fabricacao, $placa, $kmRodado]);
		$sql = $pdo->prepare("INSERT INTO Agendamento VALUES (?, ?, ?, ?, ?, ?, ?, ? )");
        $sql->execute([$id, $id_usuario, $Usuario, $descricao, $data_inicio, $data_finalizacao, $dataUm, $dataDois]);
}
	

	
?>

<html >

<head>


      <meta name = "viewport" content = "width = device-width, initial-scale = 1">      
      <link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
	  <link rel="stylesheet" href="../../Asset/menu/style.css"> </head>
	  <link rel="stylesheet" href="../../backgrounds.css">
      <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script> 
      <script>
         $(document).ready(function() {
            $('select').material_select();
         });
      </script>
	  
	  </head>

<body class="bg2">
<?php include('../../Asset/menu/menu_superior.html');?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<section class="container">
		<div class="row">
		
		<h3 class="center-align title-v1">Cadastrar Veiculo - H4</h3>
			<article class="form_O col s6 offset-s3">
				<form CLASS="form_O" method="POST">
					<div class="input-field">
						<label for="mensaje" ></label>			
							<select name="descricao" id="tipo">
								<option  value = "descricao" disabled selected>descricao</option>
								<option value = "Pneus">Pneus</option>
								<option  value = "Óleo">Óleo</option>
								<option  value = "Sensores de velocidade		">Sensores de velocidade	</option>								
								<option  value = "Suspensão">Suspensão</option>
								<option value = "Geral">Geral</option>
							</select>               
					</div>

					<div class="input-field">
						<i class="material-icons prefix">perm_identity</i>
						<label for="mensaje">Data de inicio</label> <br/>
						<input type="date" name="data_inicio" id="data_inicio" rows="10" class="materialize-textarea"  length="140" required></input >
					</div>					
	

					<div class="input-field">
						<i class="material-icons prefix">perm_identity</i>
						<label for="mensaje">data_finalizacao</label> <br/>
						<input type="date" name="data_finalizacao" id="data_finalizacao" rows="10" class="materialize-textarea"  length="140" required></input >
					</div>
					
				<div id="">
					<div  class="input-field">
						<i class="material-icons prefix">perm_identity</i>
						<label for="mensaje">marca</label> 
						<input type="text" name="marca" id="marca" rows="10" class="materialize-textarea"  length="140" required></input >
					</div>	
					<div name=""  class="input-field">
						<i class="material-icons prefix">perm_identity</i>
						<label for="mensaje">modelo</label> 
						<input type="text" name="modelo" id="modelo" rows="10" class="materialize-textarea"  length="140" required></input >
					</div>	
					<div class="input-field">
						<i class="material-icons prefix">perm_identity</i>
						<label for="mensaje">ano_fabricacao</label>
						<input type="text" name="ano_fabricacao" id="ano_fabricacao" rows="10" class="materialize-textarea"  length="140" required></input >
					</div>						
					<div class="input-field">
						<i class="material-icons prefix">perm_identity</i>
						<label for="mensaje">placa</label> 
						<input type="text" name="placa" id="placa" rows="10" class="materialize-textarea"  length="140" required></input >
					</div>										
				</div>
	

					<div class="input-field">
						<i class="material-icons prefix">perm_identity</i>
						<label for="mensaje">kmRodado</label> <br/>
						<input type="text" name="kmRodado" id="kmRodado" rows="10" class="materialize-textarea"  length="140" required></input >
					</div>	

					

				
					
					<p class="center-align">
						<button class="waves-effect waves-light btn" name="acao" value="Criar" type="submit"><i class="material-icons right">send</i>enviar</button>
					</p>
					<p class="center-align">
						<button class="waves-effect waves-light btn" name="acao2" value="Criar" type="submit"><i class="material-icons right">send</i>voltar</button>
					</p>
				</form>

			</article>
		</div>
	</section>


	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
<script>   
    document.getElementById('enabledDiv').style.display = "none";
</script>



<script>   

var slider = document.getElementById('test-slider');
  noUiSlider.create(slider, {
   start: [20, 80],
   connect: true,
   step: 1,
   orientation: 'horizontal', // 'horizontal' or 'vertical'
   range: {
     'min': 0,
     'max': 100
   },
   format: wNumb({
     decimals: 0
   })
  });
        </script>


</body>
</html>