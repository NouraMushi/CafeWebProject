<?php
$conn= new mysqli("localhost", "root", "", "CupOjoe");

if (!$conn) {

die("Connection failed: " . mysqli_connect_error());

}
if(isset($_GET['ID'])){
$ID=mysqli_real_escape_string($conn,$_GET['ID']);
//$i=$_GET['id'];
//if(isset($_GET['edit'])){
$n=$_POST['name'];
$d=$_POST['comments'];
$l=$_POST['file1'];
$s= "UPDATE Item SET Name='$n' , Logoo='$l' , description='$d' WHERE ID='$ID'";
$d=mysqli_query($conn,$s);
if ($d) {

header('location:Edit3.php');

} else {

echo "Error updating record: " . $s . "<br>" .mysqli_error($conn); 
}
//}
}
?>