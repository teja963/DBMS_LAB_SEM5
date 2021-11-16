<?php
$servername="localhost";
$username="root";
$password="";
$database="1st";
$connection=mysqli_connect($servername,$username,$password,$database);
if(!$connection){
    die('connection failed:'.mysqli_connect_error());
}
else{
    $roll=$_POST['query_search'];
     $sql="SELECT * FROM Student WHERE rollnumber='$roll'";
     $result=mysqli_query($connection,$sql);
     if($row=mysqli_fetch_array($result)){
     echo $row['name']."<br>";
     echo $row['rollnumber']."<br>";
     echo $row['dateofbirth']."<br>";
     echo $row['mobilenumber']."<br>";
     echo $row['email']."<br>";
     echo $row['sgpa1']."<br>";
     echo $row['sgpa2']."<br>";
     echo $row['sgpa3']."<br>";
     echo $row['sgpa4']."<br>";
     echo $row['sgpa5']."<br>";
     echo $row['sgpa6']."<br>";
     echo $row['sgpa7']."<br>";
     echo $row['sgpa8']."<br>";
     echo $row['cgpa']."<br>";
     echo $row['address']."<br>";
     echo $row['hobbies']."<br>";
     echo $row['references']."<br>";
     echo $row['stay']."<br>";
         }
     else{
        echo "No Record Found!, Please Enter Valid Roll Number!";
         }
     }


 ?>
