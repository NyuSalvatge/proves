<?php 

$usu=$_REQUEST['nombre'];
$contra=$_REQUEST['contra'];
$conne=mysqli_connect('localhost','root','','prova');
$sql="select * from usuarios where nombre='".$usu."'"."and contra='".$contra."'";
$result=mysqli_query($conne,$sql);

echo "<table style='border: 1px solid red;'></tr><th>ID</th></tr>";

if($row=mysqli_fetch_array($result)){

echo "<tr>";
echo "<td>Su id es".$row['id']."</td>";
echo "</tr>";
}

echo "</table>"

 ?>