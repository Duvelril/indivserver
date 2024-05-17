<?php include 'top_menu.php'; ?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Tracker - Exercises</title>
    <link rel="stylesheet" href="static/stylesexcer.css">
</head>

<body>
<script>
        $(document).ready(function() { 
        $("#home").addClass("active"); 
    });
    </script>
    <main>
        <h2>To see your saved workouts go to the workout page!</h2>
        <tr>
            <td colspan="4" class="button-container">
            <a href="workouts.php" class="button">Go to Workouts</a>            </td>
        </tr>
        <table>
            <form action="upload.php" method="POST" id="benchPressForm">
                <h2>Exercises</h2>
                <table>
                    <tr>
                        <th>Exercises</th>
                        <th>Sets</th>
                        <th>Repetitions</th> <!-- Form for repetitions -->
                        <th>Weight (kg)</th> <!-- Form for weight -->
                        <th></th> <!-- Lege kolom voor de knop toevoegen -->
                    </tr>
                    <tr>
                        <td><input type="string" name="exercise" id="exercisename" placeholder="ExerciseName" required></td>
                        <td><input type="number" name="sets" id="setsAmount" placeholder="Setamount" required></td>
                        <td><input type="number" name="repetitions" id="repsBenchPress" placeholder="Repetitions" required></td> <!-- Form for repetitions -->
                        <td><input type="number" name="weight" id="weightBenchPress" placeholder="Weight (kg)" required></td> <!-- Form for weight -->
                        <td><input class="add-button" type="submit" value="upload"></input></td>
                    </tr>
                    
            </form>
    </main>
    <footer>
        <p>&copy; 2024 Workout Tracker</p>
    </footer>
</body>

</html>