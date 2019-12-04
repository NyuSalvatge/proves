<?php 

$id=$_REQUEST['m'];

$conne=mysqli_connect('localhost','root','','prova');
$sql="select * from clientes where id='".$id."'";
$result=mysqli_query($conne,$sql);
echo "<table style='border: 1px solid red;'></tr><th>INFO</th></tr>";

if($row=mysqli_fetch_array($result)){

echo "<tr>";
echo "<td>Su nombre es ".$row['nom']."</td>";
echo "<td>su apellido es ".$row['cognom']."</td>";
echo "<td>su mail es ".$row['mail']."</td>";
echo "</tr>";

}

echo "</table>"










 ?>