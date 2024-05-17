<?php
    // Replace with your actual database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "exercises";
    $table = "exercises"; // Replace with your table name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sets = $_POST['sets'];
    $exercise = $_POST['exercise'];
    $repetitions = $_POST['repetitions'];
    $weight = $_POST['weight'];

    $sql = "INSERT INTO exercises (sets, exercise, repetitions, weight) VALUES ('$sets', '$exercise', '$repetitions','$weight')";

    if (mysqli_query($conn, $sql)) {
        header('Location: exercises.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
?>