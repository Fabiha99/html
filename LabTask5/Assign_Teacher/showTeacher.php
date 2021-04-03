<?php  
require_once 'controller/teacherInfo.php';

$teach = fetchTeacher($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		    <th>Name</th>
			<th>Gender</th>
			<th>Email</th>
			<th>Username</th>
			<th>Password</th>
			<th>Course</th>
			<th>Section</th>
			<th>Image</th>
	</tr>
	<tr>
		<td><a href="showTeacher.php?id=<?php echo $teach['ID'] ?>"><?php echo $teach['Name'] ?></a></td>
		        
		   
				<td><?php echo $teach['Gender']?></td>
				<td><?php echo $teach['Email'] ?></td>
				<td><?php echo $teach['Username']?></td>
				<td><?php echo $teach['Password']?></td>
				<td><?php echo $teach['Course']?></td>
				<td><?php echo $teach['Section']?></td>
			   
		<td><img width="100px" src="uploads/<?php echo $teach['image'] ?>" alt="<?php echo $teach['Name'] ?>"></td>
	</tr>

</table>


</body>
</html>