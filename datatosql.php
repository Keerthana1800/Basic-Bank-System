<?php
	$servername = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'tsf';

	$conn = mysqli_connect($servername,$user,$pass,$dbname);

	if(!$conn){
		die("Could Not Connect to the database".mysqli_connect_error());
	}

	$sql = "INSERT INTO users(id,name,email,credits)
			VALUES('1','Aishu','aishu@gmail.com','50000'),
				  ('2','Latha','latha@gmail.com','600090'),
			  	  ('3','Kaushik','kaushik@gmail.com','10000'),
				  ('4','Yash','yash@gmail.com','30500'),
				  ('5','Keerthi','keerthi@gmail.com','47500'),
				  ('6','Harika','harika@gmail.com','62800'),
				  ('7','Pranav','pranav@gmail.com','38000'),
				  ('8','Mehek','mehek@gmail.com','12000'),
				  ('9','Kavitha','kavitha@gmail.com','10700'),
				  ('10','Hari','hari@gmail.com','19000')";

	if($conn->query($sql) === TRUE){
		echo "New Record Create Successfully.";
	}
	else{
		echo "Error!!!".$sql."<br>".$conn->error;
	}
	$conn->close();
?>
