<!-- application/views/yoga_exercise.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga & Exercise</title>
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
            justify-content: space-between;
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

        .exercise-container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .exercise {
            margin-bottom: 20px;
        }

        .exercise img {
            width: 100%;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Yoga & Exercise</h1>
    </header>

    <nav>
        <a href="<?= base_url('home'); ?>"><i class="fas fa-arrow-left"></i> Back</a>
    </nav>

    <div class="exercise-container">
        <div class="exercise">
            <h2>Samasthithi/Tadasana1</h2>
            <img src="https://www.cardiacwellnessinstitute.com/heart-disease-treatment-prevention/wp-content/uploads/2018/08/tadasana-steps.png" alt="Yoga Pose 1" width="150" height="300">
            <p>
            Tadasana, Samasthiti, or Palm tree pose is an asana. Depending on the Yoga lineage practiced, Samasthitiḥ and Tāḍāsana may refer to the same asana or another similar asana.
            <br>
            <strong>Strengthens:</strong> Knee, Thigh, Ankle
            <br>
            <strong>Preparatory poses:</strong> Uttanasana, Adho Mukha Śvānāsana
            <br>
            <strong>Pose type:</strong> Standing
            <br>
            <strong>Also known as:</strong> Mountain pose, Samasthiti
            <br>
            <strong>Base Asana:</strong> Tāḍāsana is itself a fundamental āsana
            <br>
            <strong>Instructions:</strong> Stand with the feet together. Extend your toes; don’t grip the floor or mat. Balance evenly on the front and the back and the sides of the feet...
        </p>
        </div>

        <div class="exercise">
            <h2>Pilates</h2>
            <img src="https://img.freepik.com/free-vector/girl-doing-yoga-cartoon-character_1308-118198.jpg" alt="Exercise 1" width="150" height="300">
            <p>Pilates is a popular low-impact form of exercise that was developed a century ago. In pilates exercises, breathing, alignment, concentration and core strength are emphasized, and typically involves mats, pilates balls, and other inflated accessories to help build strength without the stress of higher-impact exercises. Pilates has been shown to improve balance, develop core strength and increase flexibility in older adults.</p>
        </div>

        <!-- Add more exercises as needed -->
    </div>
</body>
</html>
