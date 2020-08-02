<?php
include_once 'database.php';
if(isset($_POST['btn-save']))
{
$Carro = $_POST['Carro'];
$Placa = $_POST['Placa'];
$Type_Sol = $_POST['Type_Sol'];
$responsavel = $_POST['responsavel'];
$importancia = $_POST['importancia'];
$Usuario = $_POST['Usuario'];


mysqli_query($conn,"insert into pessoa(Carro,Placa,Type_Sol,responsavel,importancia,Usuario) values ('$Carro','$Placa','$Type_Sol','$responsavel','$importancia','$Usuario')") or die(mysqli_error());
echo "<p align=center>Data Added Successfully.</p>";
}
?>
