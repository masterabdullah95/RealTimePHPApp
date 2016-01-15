<html>
<head></head>
	<body>
	
<?php

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$servername = "localhost";
$username = "root";
$password = "";
$db="sales_module";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
$sql = "SELECT * FROM contact";
$result = $conn->query($sql);
$time = date('r');
$data ='';
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_object()) {
        //echo "id: " . $row["id"]. "<br>";
        $data .= '<br><h1>'.$row->firstname.'</h1>';
    }
} else {
    echo "0 results";
}
$conn->close();
		echo "retry: 1000\n";
		//echo "data: The server time is: $time id: $data  \n\n";
		echo "data: $data  \n\n";

flush();
//sleep(5);
?>
	
	</body>
</html>