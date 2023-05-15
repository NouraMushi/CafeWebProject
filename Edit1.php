 <!doctype html>
<html>
<head>
    <meta charset="utf-8">
      <title>Edit item</title>
      <link rel="stylesheet" type = "text/css"
        href="Style2.css">
        <style>
h2{

text-align: center;
position:  absolute ;
top:40%;
left: 20%;
font-family: 'EB Garamond';
font-size: 23px;

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
<li><a style="color:black;" href="delete.php">Delete Page </a></li>
</ul>
</nav>
</article>
</div>

<h2> Select the cafe you want to Edit :  </h2>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <!-- <section id="1"> -->
<?php
$conn=new mysqli("localhost", "root", "", "CupOjoe");


if (!$conn) {

die("Connection failed: " . mysqli_connect_error());

}
$query=mysqli_query($conn,"select * from Item ");

if(mysqli_num_rows($query)>0){
foreach($query as $row){
?>

    <table style="width:500px;
    height: 90px; margin-left: 10%;">

   

  <th><a href="Edit2.php?ID=<?php echo $row['ID'];?>">
  <?php  
 echo "<img src=Images/".$row['Logoo']." width='100' height='100' alt='Cafelogo'>";?></a></th>
  
     
<hr width ="1000">
           
                <th><label><?php echo "" .$row['Name']."";?></label></th>
    

            </tr>

 </table> 
<?php
}}
else {
echo "no item found";
} ?>
<br>

</section>
    </body>
</html>