<?php
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
if (!empty($name) || !empty($rollnumber) || !empty($dateofbirth) || !empty($mobilenumber) || !empty($email) || !empty($sgpa1)|| !empty($sgap2)|| !empty($sgpa3)|||| !empty($sgpa4)|||| !empty($sgpa5)|||| !empty($sgpa6)|||| !empty($sgpa7)|||| !empty($sgpa8)||
|| !empty($CGPA)|||| !empty($hobbies)|||| !empty($stay)|||| !empty($anyreferences)||) 
{
 $host = "localhost:82";
    $dbname = "root";
    $dbPassword = "";
    $dbname = "test1";
    //create connection
    $conn = new mysqli($host, $dbname, $dbPassword, $dbname);
    if (mysqli_connect_error()) 
    {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    else 
    {
     $SELECT = "SELECT email From register Where email = ? Limit 1";
     $INSERT = "INSERT Into registeration (name, rollnumber, dateofbirth, mobilenumber, email, sgpa1,sgpa2,sgpa3,sgpa4,sgpa5,sgpa6,sgpa7,sgpa8,CGPA,hobbies,stay,anyreferences) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     //Prepare statement

     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0)
      {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("s,s,s,s,s,i,i,i,i,i,i,i,i,i,s,s,s",$name,$rollnumber,$dateofbirth,$mobilenumber,$email,$sgpa1,$sgpa2,$sgpa3,$sgpa4,$sgpa5,$sgpa6,$sgpa7,$sgpa8,$CGPA,$hobbies,$stay,$anyreferences);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } 
     else 
     {
      echo "Someone already register using this email";
     }

     $stmt->close();
     $conn->close();
    }
} 
else 
{
 echo "All field are required";
 die();
}
?>