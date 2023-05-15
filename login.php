<?php


$link = new mysqli("localhost", "root", "", "CupOjoe");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//$image = addslashes(file_get_contents($_FILES['file']['tmp_name'])); //SQL Injection defence!
$name = mysqli_real_escape_string($link, $_POST['Username']);
$pass = mysqli_real_escape_string($link, $_POST['Password']);

$query = "SELECT * FROM Admin WHERE Username = '$name' AND Password = '$pass' ";

$result = mysqli_query($link,$query);

 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 $active = $row['active'];
 $count = mysqli_num_rows($result);


//Check if the entered username and password is correct or not to allow the admin to have access to certain perimssoins 
if($count == 1) {
         session_register("name");
         $_SESSION['login_user'] = $name;
         
         header("location: AdminControlPanel.html");
      }else {
         $error = "Your Login Name or Password is invalid";
      }

?>