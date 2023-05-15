<?php
$conn=mysqli_connect("localhost","root","","CupOjoe");
    $result = mysqli_query($conn,"SELECT * FROM Item ");
    if(mysqli_num_rows($result) > 0){
        while($data = mysqli_fetch_assoc($result)){
            echo $data["Name"];
        }
    }else{
         echo "No Records Found!";
    }
?>