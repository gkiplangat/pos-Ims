<?php
	include('session.php');
	
	$name=$_POST['name'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	
	mysqli_query($conn,"insert into user (username, password, access) values ('$username', '$password', '2')");
	$userid=mysqli_insert_id($conn);
	
	mysqli_query($conn,"insert into sales_person (userid, person_name, address, contact) values ('$userid', '$name', '$address', '$contact')");
	
	?>
		<script>
			window.alert('Sales Person added successfully!');
			window.history.back();
		</script>
	<?php
?>