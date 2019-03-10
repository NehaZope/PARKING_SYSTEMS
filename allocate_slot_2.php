<!DOCTYPE html>
<html>
<head>    
<link href="css/style.css" rel="stylesheet">
</head>
<body class="page1">
<?php
 $user='root';
 $pass='';
 $db='register';
 $conn= new mysqli('localhost',$user,$pass,$db) or die ("UNABLE TO CONNECT");
 if(isset($_POST['submit'])){ 
    $name = $_POST['name'];
    $status = $_POST['status'];
    if($name !=''||$status !=''){
        $sql = "UPDATE space_allocated2 SET booking ='".$_POST['status']."' WHERE slot_id='".$_POST['name']."'";

        if (mysqli_query($conn, $sql)) {
            echo "<h1>Record updated successfully</h1>" ;
        } else {
            echo "<h1>Error updating record:<h1> " . mysqli_error($conn);
        }
        
    }
    else{
    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
    }
    }
?>
<h1> THE TWO WHEELER PARKING SLOTS : </h1>
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
<button onclick="homepage.php"> GO BACK TO HOMEPAGE </button>
</body>
</html>






