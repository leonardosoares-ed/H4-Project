

<div style="text-align:center;margin-top:25px;font-weight:bold;texxxt-decoration:none;">
</div>

<head>
<link rel="stylesheet" href="../../Asset/menu/style.css">

  <meta charset="UTF-8">
  <title>CodePen - Filter Menu</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
<link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'><link rel="stylesheet" href="./style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<link rel="stylesheet" href="../../Asset/menu/style.css">
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
<link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'><link rel="stylesheet" href="../../Asset/css/BoxDetails.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script><script  src="../../Asset/css/script.js"></script>
<?php
session_start();
include('verifica_login.php');
?>

</head>

<div class="muck-up">
  <div class="overlay"></div>
  <div class="top">
    <div class="nav">
      <span class="ion-android-menu"></span>
      <p>Painel</p>
      <span class="ion-ios-more-outline"></span>
    </div>
    <div class="user-profile">
      <div class="user-details">
        <h4><?php echo $_SESSION['usuario_admin'];?><h4>
        <p><?php
$hoje = date('d/m/Y');
echo $hoje; ?> </p>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="filter-btn">
    <a id="one" href="#"><i class="ion-ios-checkmark-outline"></i></a>
    <a id="two" href="#"><i class="ion-ios-alarm-outline"></i></a>
    <a id="three" href="#"><i class="ion-ios-heart-outline"></i></a>
    <a id="all" href="#"><i class="ion-ios-star-outline"></i></a>
    <span class="toggle-btn ion-android-funnel"></span>
  </div>
  <div class="clearfix"></div>
  <div class="bottom">
    <div class="title">
      <h3>Ferramentas</h3>
    </div>
    <ul class="tasks">
      <li class="one red">
        <span class="task-title">Configurar chamados</span>
        <span class="task-cat"><a href="../../painel/adm-config-ticket/">Cadastrar</a></span>
      </li>
	   <li class="one red">
        <span class="task-title">Configurar Usuarios</span>
        <span class="task-cat"><a href="../../painel/adm-config-user/">Acessar</a></span>
      </li>
      
      <li class="three yellow">
        <span class="task-title">Sair</span>
        <span class="task-cat"><a href="logout.php">Sair</a></span>
      </li>


    </ul>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script><script  src="./script.js"></script>
