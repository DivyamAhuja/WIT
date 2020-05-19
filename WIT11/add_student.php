<?php
    $serverName = "localhost";
    $username = "root";
    $password = "root";
    $dbName = "student";

    $conn = new mysqli($serverName, $username, $password, $dbName);
    if($conn->connect_error){
        die("Connection failed ". $conn->connect_error);
    }

    $first = $_POST["firstname"];
    $last = $_POST["lastname"];
    $email = $_POST["email"];
    if(isset($_POST["firstname"]) && $first != ""){
        $sql = "INSERT INTO students(firstname, lastname, email) VALUES('".$first."', '".$last."',' ".$email."')";
        if($conn->query($sql) === TRUE)
            echo "Student Added";
        else
            echo "Error: ". $conn->error;
    }
    $conn->close();
?>
<script type="text/javascript">
    window.location.href = 'student_mysql.php';
</script>