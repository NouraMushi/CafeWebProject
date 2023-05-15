
<?php

$conn=mysqli_connect("localhost","root","","CupOjoe");

if(!$conn){
die("conection failed:".mysqli_connect_error());}


if(isset($_POST['log'])){

$username1 = $_POST['Username'];

$password1 = $_POST['Password'];

$sql="select * from Admin where Username='$username1'";

$result=mysqli_query($conn,$sql);

$admin=mysqli_fetch_assoc($result);

if($admin){
if($admin['Password']==$password1){

$_SESSION['user_ID']=$admin['ID'];
header('location: AdminControlPanel.html');

}else{
echo "<script>alert('incorrect  password');window.location.assign('Login.html');</script>";
}
        


}}


?>


