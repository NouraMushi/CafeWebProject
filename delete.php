<?php
session_start();?>


<!DOCTYPE html > 


<html>
<head>
<meta charset = "utf-8">
<title> Delete page </title>

<link rel="stylesheet" type="text/css" href="Style2.css">
<style type = "text/css"> 

h2{

text-align: center;
position:  absolute ;
top:40%;
left: 20%;
font-family: 'EB Garamond';
font-size: 23px;

}

 .floated1{
background-color:white;
font-size:1.5em;
font-family:arial;
padding: .2em;
margin-bottom: .5em;
float: right;
text-align:center;
width:20% ;
position:absolute;
 left:50%;
 top:47%;
 }

 .floated2{
background-color:white;
font-size:1.5em;
font-family:arial;
padding: .2em;
margin-bottom: .5em;
float: right;
text-align:center;
width:20% ;
position:absolute;
 left:50%; 
top:62%;
 }


 .floated5{
background-color:white;
font-size:1.5em;
font-family:arial;
padding: .2em;
margin-bottom: .5em;
float: right;
text-align:center;
width:20% ;
position:absolute;
 left:71%; 
top:77%;
border-color:
 }



 .floated4{
background-color:white;
font-size:1.5em;
font-family:arial;
padding: .2em;
margin-bottom: .5em;
float: right;
text-align:center;
width:20% ;
position:absolute;
 left:71%; 
top:92%;
 }





</style> 
</head> 

<body> 
<div class="logo"></div>
<div class ="floated3">
<article>
<nav >Delete Page 
<ul style="list-style: none;">
<li><a style="color:black;" href="AdminControlPanel.html">Admin Control Panel</a></li>
<li><a style="color:black;" href="AddCafe.html"> Add page  </a></li>
<li><a style="color:black;" href="Edit1.php">Edit Page </a></li>
</ul>
</nav>
</article>
</div>

 <?php 
if(isset($_SESSION['status'])){
echo "<h6>" .$_SESSION['status']. "</h6>";
unset($_SESSION['status']);
}
?>



<h2> Select the cafe you want to Delete :  </h2>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <form method = "post" action="deleteQuery.php">
   
<?php
$conn=mysqli_connect("localhost","root","","CupOjoe");

if (!$conn) {

die("Connection failed: " . mysqli_connect_error());

}
$query=mysqli_query($conn,"select * from Item ");

if(mysqli_num_rows($query)>0){

foreach($query as $row){

?>

    <table style="width:500px;top:30%;
    height: 90px; margin-left: 12%;">
    
<th>
<?php echo "<img src=Images/".$row['Logoo']." &nbsp width='100' height='100' alt='cafe pic'>";?></th>



  <th><label><?php echo  "<label>".$row['Name']."";?><input type ='checkbox'  name='cafe[]'   value ="<?= $row['ID'];?>"></label></th>
<hr width ="1000">
<?php 
}
 }  
else {
echo "no item found";
}
?>



<input style = "left:90%; top:110%;" class = "button Adminstyle" type ="submit" name="delete" value ="Delete">
     <input style = " left:80%; top:110%;" class = "button" type ="reset" value ="Cancel"> </p>

</form>


</body> 
</html> 





















