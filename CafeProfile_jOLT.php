<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jolt Cafe</title>
<link rel="stylesheet" type="text/css" href="Style1.css">
<style type="text/css">

h1{
text-align: center;
position:  absolute ;
top:20%;
left:23%;
font-size:40px;

}



.floated3{background-color:#D5CF8D;
padding: .2em;
margin-top:0em;
float: right;
width:15% ;
hight:10%; 
top : 3%; 
left : 90%;
  position: absolute;
}



body{

font-family:EB Garamond;}
nav{ font-weight:bold;
color:black;
border:2px solid #D5CF8D;
text-align:center;
width: 10em;
background-color:#D5CF8D;}
nav ul{ display: none;
list-stayle: none;
margin:0;
padding:0;}
nav:hover ul{ display:block;}

nav ul li{ border-top: 2px solid #D5CF8D;
background-color:white;
width;10em;
color:black;}
nav ul li :hover{background-color:#D5CF8D;}	
a{ text-decoration:none;}


</style>   
</head>
 <body> 
 <?php
$conn=new mysqli("localhost", "root", "", "CupOjoe");


if (!$conn) {

die("Connection failed: " . mysqli_connect_error());

}
$query=mysqli_query($conn,"select * from Item where id =47 ");
if(mysqli_num_rows($query)>0){

foreach($query as $row){
 
?>
<div style = "position:absolute; left:40%; top:30%;">
<h3><?php echo "" .$row['overall_rating']."";?></div></h3>
<?php
}}
else {
echo "no Reviews yet , be the first !!";

} ?>

<header class ="ab">
<div class="logo2"> </div>

<div class ="floated3">
<article>
<nav >Cafe Profile 
<ul style="list-style: none;">
<li><a href="index.html">Home page</a></li>
<li><a href="AboutUs.html"> AboutUs </a></li>
<li><a href="Login.html">log-in</a></li>

</ul>
</nav>
</article>
</div>
</header>

<h1 ><strong>  JOLT Cafe <strong> </h1>

<div style = "position:absolute; left:3%; top:27%;"> <img src="Images/jolt.png" width = "250" height ="150" alt="jolt COFFEE" ></div>
 <div class="vl2"></div>
 <div style = "position:absolute; left:24%; top:32%; "> <img src="Images/check.png" alt="CHECK " width="30" height="30"></div>
<div style = "position:absolute; left:27%; top:33%; font-weight :lighter; "> <em> Good place to study at </em> </div>
<div style = "position:absolute; left:24%; top:37%; "> <img src="Images/check.png" alt="CHECK " width="30" height="30"></div>
<div style = "position:absolute; left:27%; top:37%;font-weight : lighter;  "> <em> Calm music</em> </div>
<div style = "position:absolute; left:24%; top:42%; "> <img src="Images/check.png" alt="CHECK " width="30" height="30"></div>
<div style = "position:absolute; left:27%; top:42%;font-weight : lighter;  "> <em> Accepts Credit Card </em></div>



</div>
<div style = "position:absolute; left:10%; top:50%; font-size:20px; "><h2> Reviews</h2></div>
  <br> <br> <br> <br> <br> <br> <br> <br> <br>
  <br> <br> <br> <br> <br> <br> <br> <br> <br>
  
  <br> <br> <br> 

 	 <?php
$conn=new mysqli("localhost", "root", "", "CupOjoe");


if (!$conn) {

die("Connection failed: " . mysqli_connect_error());

}

$query=mysqli_query($conn,"select * from Review where item_id =45 ");

if(mysqli_num_rows($query)>0){

foreach($query as $row){
 
?>

<form method="post" action="InsertReview.php?item_id=<?php echo $row['item_id']?>">
<input type="submit" name = "add" class = "button2" value=" send !" style="position:absolute; left:26%; top:87%; " />
<p style="position:absolute; left:12%; top:77%;" >Add your review ! </p>


<input type="text" style="position:absolute; left:10%; top:84%; " type="text" name ="comment" placeholder="Write your review ..." />
<input type="text" style="position:absolute; left:21%; top:84%; " type="text" name = "name" placeholder="your name..." />
<input type="text" style="position:absolute; left:15%; top:87%; " type="text" name = "rate" placeholder="your rate(2.3) " />



<p style='margin-left: 200px;'>
  <img src="Images/user.png"   alt="user pic " width="30" height="30">
<th><label><?php echo "" .$row['name']."";?></label></th> <th><label><?php echo "" .$row['rating']."";?></label></th>
  <br>  <form><textarea  rows=1 cols =30 style=" background-color:#DFECEA; name = "comments" > <?php echo "" .$row['body']."";?></textarea></th></p>
<?php
}}
else {
echo "no Reviews yet , be the first !!";

} ?>



</body> 
</html>





