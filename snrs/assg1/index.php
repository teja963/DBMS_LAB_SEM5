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

$con = new mysqli("localhost:82;dbname=test1",'root','');
if(isset($_POST["submit"])){
    $str = $_POST["test1"];
    $str = $con->prepare("SELECT *FROM  'test1' WHERE name='$str'" );
    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth->execute();

    if($row = $sth->fecth()) 
{
          ?>
          <br><br><br>
          <table>
<tr>
	<th>id</th>
    <th>name</th>
    <th>rollnumber</th>
</tr>
<tr>
	<td><?php echo $row->id;?></td>
    <td><?php echo $row->name;?></td>
    <td><?php echo $row->rollnumber;?></td>
</tr>

           </table>
<?php
}


    else{
       
    	echo "NAME IS NOT ON RECORD";
    }


}

$conn = new mysqli('localhost:82','root','','test1');
if($conn->connect_error){
	die('connection failed : '.$conn->connection_error);
}else{
      $stmt = $conn->prepare("insert into registration(name,rollnumber,dateofbirth,mobilenumber,email,sgpa1,sgpa2,sgpa3,sgpa4,sgpa5,sgpa6,sgpa7,sgpa8,CGPA,hobbies,stay,anyreferences) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
      $stmt->bind_param("s,s,s,s,s,d,d,d,d,d,d,d,d,d,s,s,s",$name,$rollnumber,$dateofbirth,$mobilenumber,$email,$sgpa1,$sgpa2,$sgpa3,$sgpa4,$sgpa5,$sgpa6,$sgpa7,$sgpa8,$CGPA,$hobbies,$stay,$anyreferences);
      $stmt->execute();
      echo "registration successfull";
      $stmt->close();
      $conn->close();

}
?>