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
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        header {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 20px;
            width: 100%;
        }

        h1 {
            margin: 0;
            font-size: 2em;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 50px;
        }

        .card {
            position: relative;
            width: 300px; 
            height: 300px; 
            background-color: #E1EBEE; 
            color: #000;
            text-align: center;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            overflow: hidden;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card a {
            text-decoration: none;
            color: inherit;
            font-size: 1.2em;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80%; 
            flex-direction: column;
            padding: 20px;
        }

        .card i {
            margin-bottom: 10px;
        }

        .additional-info {
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 10px;
            font-size: 0.8em;
        }

        .card span {
            font-size: 1.4em; 
            font-weight: bold; 
        }
    </style>
</head>
<body>
    <header>
        <h1>Elderly Care</h1>
    </header>

    <div class="container">
        <div class="card">
            <a href="<?= base_url('home/yogaExercise'); ?>">
                <i class="fas fa-dumbbell"></i>
                <span>Yoga & Exercise</span>
                
            </a>
        </div>
        <div class="card">
            <a href="<?= base_url('home/scheduleMedicines'); ?>">
                <i class="fas fa-clock"></i>
                <span>Schedule Medicines</span>
                
            </a>
        </div>
        <div class="card">
            <a href="<?= base_url('home/locateHospital'); ?>">
                <i class="fas fa-hospital"></i>
                <span>Locate Nearby Hospital</span>
                
            </a>
        </div>
        <div class="card">
            <a href="<?= base_url('home/healthTrack'); ?>">
                <i class="fas fa-chart-line"></i>
                <span>Health Track</span>
                
            </a>
        </div>
    </div>
</body>
</html>
