<!DOCTYPE html>
<html>
<head>
<title>PHP insertion</title>
<link href="css/style.css" rel="stylesheet">
<link href="css/insert.css" rel="stylesheet">
</head>
<body class="page1">
<h2 style="color:white;">BOOK THE PARKING SLOTS</h2><br>
<h2 style="color:white;"> TWO WHEELER PARKING SLOTS AVAILABLE ON FLOOR G2</h2>
<h2 style="color:white;"> F1 TO F10 ARE SLOTS RESERVED FOR FACULTY</h2>
<h2 style="color:white;"> H1 TO H10 ARE SLOTS RESERVED FOR SPECIAL-ABLED PERSONS</h2>
<br><br><br><br><br>
<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM space_allocated2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<button>".$row['slot_id']."<br>".$row['booking']."</button>";
    }
} else {
    echo "0 results";
}
?>
<br><br> 
<form action="allocate_slot_2.php">
<h2>BOOK YOUR SLOT</h2>
<label>Name:</label>
<input class="input" name="name" type="text" value="">                          
<label>Status</label>
<input class="input" name="status" type="text" value="">
<input class="submit" name="submit" type="submit" value="Insert">
</form>
<br><br>
</body>
</html>