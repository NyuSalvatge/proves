<?php 

$conne=mysqli_connect('localhost','root','','prova');
$palabra=$_REQUEST['q'];
$sql="select * from restaurants where tipus='".$palabra."'";
$result=mysqli_query($conne,$sql);

if($row=mysqli_fetch_array($result)){
echo $palabra;
}else{
	echo "error";
}




 ?>