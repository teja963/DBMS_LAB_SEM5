<?php
$servername="localhost:82";
$username="root";
$password="";
$dbname="test1";
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
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die('connection failed : '.mysqli_connect_error());
}
else
{
 $sql = "INSERT INTO registration(name,rollnumber,dateofbirth,mobilenumber,email,sgpa1,sgpa2,sgpa3,sgpa4,sgpa5,sgpa6,sgpa7,sgpa8,CGPA,hobbies,stay,anyreferences)values('$name','$rollnumber','$dateofbirth','$mobilenumber','$email','$sgpa1','$sgpa2','$sgpa3','$sgpa4','$sgpa5','$sgpa6','$sgpa7','$sgpa8','$CGPA','$hobbies','$stay','$anyreferences')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
  ?>
















