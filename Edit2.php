<!DOCTYPE html>
<html>
<head>
<meta charset ="utf-8">
<title>Edit item 2</title>
  <link rel="stylesheet" type = "text/css"
        href="Style2.css">
        <style>
        h2{

text-align: center;
position:  absolute ;
top:38%;
left: 20%;
font-family: 'EB Garamond';

}
  </style>
</head>
<body>
    <div class="logo"></div>
 <div class ="floated3">
<article>
<nav >Edit Page 
<ul style="list-style: none;">
<li><a style="color:black;" href="AdminControlPanel.html">Admin Control Panel</a></li>
<li><a style="color:black;" href="AddCafe.html"> Add page  </a></li>
<li><a style="color:black;" href="delete.html">Delete Page </a></li>
</ul>
</nav>
</article>
</div>

<h2> Edit Café </h2>

    
<?php
$conn=mysqli_connect("localhost","root","","CupOjoe");

if (!$conn) {

die("Connection failed: " . mysqli_connect_error());

}
if(isset($_GET['ID'])){
$ID=mysqli_real_escape_string($conn,$_GET['ID']);

$query=mysqli_query($conn,"select * from Item where ID=$ID");

$row=mysqli_fetch_assoc($query);

?>

<form method="post" action="Edit3.php?ID=<?php echo $row['ID']?>">
     <input class="button2" type="submit" value="Edit" name="add">

<div class="ogo"><lable> Logo : 
<img style=" margin-left: 250px; display:block;" src="<?php echo "" .$row['Logoo']."";?>"
width = "200" height= "200" alt="pizza pic"></div><br>

    
    
          
       <div class="name">    Café name :
    <textarea name="name" rows="2" cols="27"><?php echo "" .$row['Name']."";?></textarea></td> </tr> </div> 
            
  <div class="Description"> <label> Description :<br><br> <textarea name="comments" rows="6" cols="27"><?php echo "" .$row['description']."";?></textarea></td>           
    </tr> </div>
        <div style = "position:absolute; left:58%; top:66%; "><form action="upload.php" method="post"><input class = "Adminstyle" type="file" name="file1" /></form></div>
    </table>  
  
<?php } ?>
<br><br>

<input class="button" type="reset" value="Cancel">
</p> 

</form>

</body>
</html>