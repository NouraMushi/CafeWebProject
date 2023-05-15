<?php
session_start();
$conn=mysqli_connect("localhost","root","","CupOjoe");


if (!$conn) {

die("Connection failed: " . mysqli_connect_error());

}



if(isset($_POST['delete'])){
$ch=$_POST['cafe'];
$extract=implode(',',$ch);
$q="DELETE FROM Item WHERE ID IN($extract)";
$query=mysqli_query($conn,$q);
if($query){
$_SESSION['status']="item deleted successfully";
header("location:delete.php");
echo"great " ;
}
else {
$_SESSION['status']="item not deleted successfully";
header("location:delete.php");
}
}



?>

<?php
mysqli_close($conn);

?>
