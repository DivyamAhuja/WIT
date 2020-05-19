<?php session_start()?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP MySQL connection</title>
        <style>
            th, td {
                padding: 15px;
                text-align: left;
            }

            .data th, .data td {
                padding: 15px;
                text-align: left;
                border-bottom: 1px solid #ddd
            }
            
        </style>
    </head>
    <body>
        <center>
            <h1>Student Data (PHP and MySQL)</h1>
            <form method="post" action="add_student.php">
                <table>
                    <tr colspan=2 style='text-align: center;'>
                        <h2>Add Student</h2>
                    </tr>
                    <tr>
                        <td><label for="firstname">First name:&nbsp;</label></td>
                        <td><input type='text' name="firstname" id="firstname" required></td>
                    </tr>
                    <tr>
                        <td><label for="lastname">Last name:&nbsp;</label></td>
                        <td><input type='text' name="lastname" id="lastname" required></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email:&nbsp;</label></td>
                        <td><input type='text' name="email" id="email" required></td>
                    </tr>
                    <tr>
                        <td colspan=2 style="text-align: center;">
                            <input type="submit" value="Submit">
                        </td>
                    </tr>
                </table>
            </form>
            <br><br><br><br>

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
                echo "<table class='data'>
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
                        </tr>
                        ";
                    
                    echo"</table>
                    ";
                }else{
                    echo"</table>
                    ";
                    echo "0 results
                    ";
                }


                $conn->close();
            ?>
        </center>
    </body>
</html>