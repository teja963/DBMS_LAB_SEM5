<!DOCTYPE html>
<html>
<head>
	<title>Search Bar</title>
</head>
<body>

<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
	
</form>

</body>
</html>

<?php

$con = new PDO("mysql:host=localhost:82;dbname=search bar",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `search` WHERE  rollnumber = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>name</th>
				<th>rollnumber</th>
                                <th>dateofbirth</th>
                                <th>mobilenumber</th>
                                <th> email </th>
                                <th> sgpa1     </th>
                                <th> sgpa2     </th>   
                                <th> sgpa3     </th>   
                                <th> sgpa4      </th>
                                <th> sgpa5     </th>      
                                <th> sgpa6     </th>
                                <th>  sgpa7    </th> 
                                <th> sgpa8     </th> 
                                <th> CGPA     </th>
                                 <th> hobbies     </th>
                             <th> stay     </th>
                            <th>  anyreferences    </th>
                               
                              
                              
                                 
			</tr>
			<tr>
				<td><?php echo $row->name; ?></td>
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
			echo "record Does not exist";
		}


}

?>