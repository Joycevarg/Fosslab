
	 <?php
		$servername = "localhost";
		$username = "joyce";
		$password = "mithra lijo";
		$dbname = "phpapp";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$username = $_GET['uname'];
		$password = $_GET['psw'];

		$sql = "SELECT * FROM Users;";
		$result = $conn->query($sql);

		$flag = 0;
		if ($result->num_rows > 0) {
		    // output data of each row
    		while($row = $result->fetch_assoc()) {
        		if ($row["username"] === $username && $row["password"] === $password) {
        			echo "Successfully logged in";
        			$flag = 1;
        		}
    		}
		}
		if ($flag === 0) {
			echo "User not Found";
		}
		$conn->close();
	?> 
	<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>
		
	</p>
</body>
</html>
