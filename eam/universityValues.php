<?php
    include './db_login/login_db.php';

    require_once './db_login/login_db.php'; //db info

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = ("SELECT * FROM  University");
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $uni = $row["UniversityName"];
            echo '<option value="'.$row["UniversityName"].'">'.$row["UniversityName"].'</option>';
        }
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
