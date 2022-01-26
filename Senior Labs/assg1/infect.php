<?php
$servername="localhost:82";
$username="root";
$password="";
$dbname="reg";
$name=$_POST['name'];
$rollnumber=$_POST['rollnumber'];
$dateofbirth=$_POST['dateofbirth'];
$mobilenumber=$_POST['mobilenumber'];
$email=$_POST['email'];
$sgpa1=$_POST['sgpa1'];
$sgap2=$_POST['sgap2'];
$sgpa3=$_POST['sgpa3'];
$sgpa4=$_POST['sgpa4'];
$sgpa5=$_POST['sgpa5'];
$sgpa6=$_POST['sgpa6'];
$sgpa7=$_POST['sgpa7'];
$sgpa8=$_POST['sgpa8'];
$CGPA=$_POST['CGPA'];
$hobbies=$_POST['hobbies'];
$stay=$_POST['stay'];
$anyreferences=$_POST['anyreferences'];
$conn = new mysqli('localhost:82','root','','reg');
if($conn->connect_error)
{
	die('connection failed : '.$conn->connection_error);
}
else
{
 $stmt = $conn->prepare("insert into info(name,rollnumber,dateofbirth,mobilenumber,email,sgpa1,sgpa2,sgpa3,sgpa4,sgpa5,sgpa6,sgpa7,sgpa8,CGPA,hobbies,stay,anyreferences)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
      $stmt->bind_param("s,s,s,s,s,i,i,i,i,i,i,i,i,i,s,s,s",$name,$rollnumber,$dateofbirth,$mobilenumber,$email,$sgpa1,$sgpa2,$sgpa3,$sgpa4,$sgpa5,$sgpa6,$sgpa7,$sgpa8,$CGPA,$hobbies,$stay,$anyreferences);
      $stmt->execute();
      echo "registration successfull";
      $stmt->close();
      $conn->close();

}
?>