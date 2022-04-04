<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	
	//establish connection info
$server = "talias2.sg-host.com";// your server
$userid = "uwggwgijazowf"; // your user id
$pw = "9wr2p5brddtg"; // your pw
$db= "dblsb9jeuotbq6"; // your database
		
// Create connection
$conn = new mysqli($server, $userid, $pw );

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";
	
//select the database
$conn->select_db($db);

	//run a query
$sql = "SELECT first_name, last_name FROM users";
$result = $conn->query($sql);

//get results
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
   {
    	echo $row["first_name"]. " " . $row["last_name"]. "<br>";
   }
} 
else 
  echo "no results";
	
//close the connection	
$conn->close();

	
	?>
</body>
</html>
