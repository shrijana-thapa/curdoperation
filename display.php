<!DOCTYPE HTML>
<HTML>
<head>
	 <script src="https://kit.fontawesome.com/27e20f2080.js" crossorigin="anonymous"></script>
	 <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<h1 class="head"> DISPLAY  TABLE</h1>
	<div class="container">
	<table class="table">
		<thead >
		<th>ID</th>
		<th>NAME</th>
		<th>PASSWORD</th>
		<th COLSPAN="2">OPERATION</th>
	</thead>
	<tbody>
		<?php 
		$conn=mysqli_connect("localhost","root","","curdform");
		$select="SELECT * from curdreg";
		$q=mysqli_query($conn,$select);
		while ($res=mysqli_fetch_assoc($q)){

		?>
		<tr>
			<td><?php echo $res['id']; ?></td>
			<td><?php echo $res['Username']; ?></td>
			<td><?php echo $res['Password']; ?></td>
			<td><a href="update.php?id=<?php echo $res['id']; ?>"><i class="fas fa-edit  fa-e"></i></a></td>
			<td><a href="delete.php?ids=<?php echo $res['id']; ?>"><i class="fas fa-trash fa-t"></i></a></td>
		</tr>
		<?php 
	}
	?>
	</tbody></table></div>
	
 

</body>
</HTML>