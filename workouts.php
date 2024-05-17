<?php include 'top_menu.php'; ?>
<!DOCTYPE html> 
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workouts</title>
    <link rel="stylesheet" href="static/workoutscss.css">
</head>
<body>
    <tr>    
        <td colspan="4" class="button-container">
        <a href="exercises.php" class="button">Go to Exercises</a>            
        </td>
    </tr>
    <h1> Your saved exercises! </h1>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exercises";
$table = "exercises"; 
$mysqli = new mysqli("localhost", $username, $password, $dbname); 
$query = "SELECT * FROM exercises";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Exercise</font> </td> 
          <td> <font face="Arial">Sets</font> </td> 
          <td> <font face="Arial">Repetitions</font> </td> 
          <td> <font face="Arial">Weight</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["exercise"];
        $field2name = $row["sets"];
        $field3name = $row["repetitions"];
        $field4name = $row["weight"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>