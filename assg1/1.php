
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
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $rollnumber=$_POST['roll'];
        $dateofbirth=$_POST['DOB'];
        $mobilenumber=$_POST['mobile'];
        $email=$_POST['email'];
        $sgpa1=$_POST['SGPA1'];
        $sgpa2=$_POST['SGPA2'];
        $sgpa3=$_POST['SGPA3'];
        $sgpa4=$_POST['SGPA4'];
        $sgpa5=$_POST['SGPA5'];
        $sgpa6=$_POST['SGPA6'];
        $sgpa7=$_POST['SGPA7'];
        $sgpa8=$_POST['SGPA8'];
        $cgpa=$_POST['CGPA'];
        $address=$_POST['Address'];
        $hobbies=$_POST['Hobbies'];
        $reference=$_POST['reference'];
        $stay=$_POST['stay'];
        $sql="INSERT INTO Student(`name`, `rollnumber`, `dateofbirth`, `mobilenumber`, `email`, `sgpa1`, `sgpa2`, `sgpa3`, `sgpa4`, `sgpa5`, `sgpa6`, `sgpa7`, `sgpa8`, `cgpa`, `address`, `hobbies`, `reference`, `stay`) VALUES ('$name', '$rollnumber', '$dateofbirth', '$mobilenumber', '$email', '$sgpa1', '$sgpa2', '$sgpa3', '$sgpa4', '$sgpa5', '$sgpa6', '$sgpa7', '$sgpa8', '$cgpa', '$address', '$hobbies', '$reference', '$stay')";
            if ($connection->query($sql) === TRUE) {
                echo "New record created successfully! for the student $rollnumber";
              } 
              elseif ($connection->error == "Duplicate entry '$rollnumber' for key 'PRIMARY'") {
                echo "INSERTION FAILED!"."<br>";
                echo "Student with roll number $rollnumber already exists!";
            
            }
            else{
                echo "Error:"."<br>" . $connection->error;
              }
              $connection->close();
        }
     
        }


?>

