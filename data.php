<html>
<?php
$name = $_POST['name'];
$gender = $_POST['gender'];
$college = $_POST['college'];
$city = $_POST['city'];
$email = $_POST['email'];

//Database Connection
$conn = new mysqli('localhost', 'root', '','registration_form');
if($conn->connect_error){   
    die('Connection Failed : ' . $conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into Registration(Name,Gender,College,City,Email)values(?,?,?,?,?)");
    $stmt->bind_param("sssss", $name,$gender, $college, $city, $email);
    $stmt->execute();
    echo "<center><h2>Congratulations $name your Registration Successfull !</center></h2>";
    echo"<center><h3><a href='index.html'> Back to Home</a></h3></center>";
    $stmt->close();
    $conn->close();
    
}
?>
</html>