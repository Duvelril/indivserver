<?php include('server.php') ?>
<?php include 'top_menu.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Tracker - Homepage</title>
    <link rel="stylesheet" href="static/styleshome.css">

</head>
<body>
<script>
        $(document).ready(function() { 
        $("#home").addClass("active"); 
    });
    </script>
    <main>
        <h2>Welcome to Workout Tracker</h2>
        <h3>You have succesfully logged in!</h3>
        <a href="Exercises.php" class="button">Exercises</a>
        <a href="Workouts.php" class="button">Workouts</a>

    </main>
    <footer>
        <p>&copy; 2024 Workout Tracker</p>
    </footer>
</body>
</html>
