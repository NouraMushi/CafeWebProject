<?php 


if(isset($_POST['a'])){

$b=getimagesize($_FILES['file1']['tmp_name']);


if($b !==false){
$file=$_FILES['file1']['tmp_name'];
$image=addslashes(file_get_contents($file));
$conn=mysqli_connect("localhost","root",""،"CupOjoe");


if (!$conn) {

die("Connection failed: " . mysqli_connect_error());

}

}
}

?>