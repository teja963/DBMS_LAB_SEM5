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















$con = new mysqli("localhost:82;dbname=reg",'root','');
if(isset($_POST["submit"])){
    $str = $_POST["reg"];
    $str = $con->prepare("SELECT *FROM  'reg' WHERE name='$str'" );
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
    <td><?php echo $row->dateofbirth;?></td>
<td><?php echo $row->mobilenumber;?></td>
<td><?php echo $row->email;?></td>
<td><?php echo $row->sgpa1;?></td>
<td><?php echo $row->sgpa2;?></td>
<td><?php echo $row->sgpa3;?></td>
<td><?php echo $row->sgpa4;?></td>
<td><?php echo $row->sgpa5;?></td>
<td><?php echo $row->sgpa6;?></td>
<td><?php echo $row->sgpa7;?></td>
<td><?php echo $row->sgpa8;?></td>
<td><?php echo $row->CGPA;?></td>
<td><?php echo $row->hobbies;?></td>
<td><?php echo $row->stay;?></td>
<td><?php echo $row->anyreferences;?></td>
</tr>

           </table>
<?php
}


    else{
       
    	echo "NAME IS NOT ON RECORD";
    }


}
?>