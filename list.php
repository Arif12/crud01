<?php
$link= mysqli_connect("localhost",
						"root",
						"",
						"information");

$query="SELECT * FROM user";

$result= mysqli_query($link,$query);
?>

<table border="1" width="70%">
  <tr>
    <td> Id </td>
    <td> First Name</td>
    <td> Last Name </td>
    <td> Mobile </td>
    <td>Action</td>
  </tr>

<?php
     foreach($result as $row) {
?>
<tr>
	<td><?php echo $row['id']?></td>
    <td><?php echo $row['First_name']?></td>
    <td><?php echo $row['Last_name']?></td>
    <td><?php echo $row['Mobile']?></td>
            <td> <a href="#">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> | <a href="view.php?id=<?php echo $row['id']?>">View</a></td>
</tr>

<?php

	 }
?>
</table>
<a href="create.html">HOME</a>
