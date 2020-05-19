<!DOCTYPE html>
<html>
    <head>
        <title>PHP MySQL connection</title>
        <style>
            th, td {
                padding: 15px;
                text-align: left;
                border-bottom: 1px solid #ddd
            }
        </style>
    </head>
    <body>
        <center>
            <h1>Student Data (PHP and MySQL)</h1>
            <p style='width: 70%'>
            
            </p>
            <?php
                $serverName = "localhost";
                $username = "root";
                $password = "root";
                $dbName = "student";
                $conn = new mysqli($serverName, $username, $password, $dbName);

                if($conn->connect_error){
                    die("Connection failed ". $conn->connect_error);
                }

                $sql = "SELECT * from students;";
                $result = $conn->query($sql);
                echo "<table>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                        </tr>
                    ";
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc())
                        echo "<tr>".
                            "<td>".$row["id"]."</td>
                            <td>".$row["firstname"]." ".$row["lastname"]."</td>
                            <td>".$row["email"]."</td>
                        </tr><br>";
                    
                    echo"</table><br>";
                }else{
                    echo"</table><br>";
                    echo "0 results";
                }


                $conn->close();
            ?>
        </center>
    </body>
</html>