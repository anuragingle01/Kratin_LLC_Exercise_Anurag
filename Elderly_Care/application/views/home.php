<!-- application/views/home.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Health App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-yk+jU3izpLp+PKbqQUvhhrTnKc5JKQ9J/Ak+4lLZpHdiSMlZ+zHssPFFwZf+OQqJ" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        header {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 20px;
        }

        h1 {
            margin: 0;
            font-size: 2em;
        }

        nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 20px;
            background-color: #34495e;
        }

        nav a {
            text-decoration: none;
            color: #ecf0f1;
            font-size: 1.2em;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #3498db;
        }

        div.container {
            max-width: 800px;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <header>
        <h1>Elderly Care</h1>
    </header>

    <nav>
        <a href="<?= base_url('home/yogaExercise'); ?>"><i class="fas fa-dumbbell"></i> Yoga & Exercise</a>
        <a href="<?= base_url('home/scheduleMedicines'); ?>"><i class="fas fa-clock"></i> Schedule Medicines</a>
        <a href="<?= base_url('home/locateHospital'); ?>"><i class="fas fa-hospital"></i> Locate Nearby Hospital</a>
        <a href="<?= base_url('home/healthTrack'); ?>"><i class="fas fa-chart-line"></i> Health Track</a>
    </nav>

    <div class="container">
    </div>
</body>
</html>
