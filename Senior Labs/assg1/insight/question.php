<?php

$name=$_POST['name'];
$rollnumber=$_POST['rollnumber'];
$dateofbirth=$_POST['dateofbirth'];
$mobilenumber=$_POST['mobilenumber'];
$email=$_POST['email'];
$sgp1=$_POST['sgpa1'];
$sgp2=$_POST['sgpa2'];
$sgp3=$_POST['sgpa3'];
$sgp4=$_POST['sgpa4'];
$sgp5=$_POST['sgpa5'];
$sgp6=$_POST['sgpa6'];
$sgp7=$_POST['sgpa7'];
$sgp8=$_POST['sgpa8'];
$cgpa=$_POST['cgpa'];
$hobbies=$_POST['Hobbies'];
$anyreferences=$_POST['anyreferences'];
$stay=$_POST['stay'];
$servername='localhost:82';
$username='root';
$password='';
$dbname='reg';
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("Connection failed: " .mysqli_connect_error());
}
$sql= "INSERT INTO biodata(name,rollnumber,dateofbirth,mobilenumber,email,sgpa1,sgpa2,sgpa3,sgpa4,sgpa5,sgpa6,sgpa7,sgpa8,cgpa,hobbies,stay,anyreferences)VALUES('$name','$rollnumber','$dateofbirth','$mobilenumber','$email','$sgp1','$sgp2','$sgp3','$sgp4','$sgp5','$sgp6','$sgp7','$sgp8','$cgpa','$hobbies','$stay','$anyreferences')" ;
if ($conn->query($sql) === TRUE) {
    echo "New record created s
uccessfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
  ?>

?>
