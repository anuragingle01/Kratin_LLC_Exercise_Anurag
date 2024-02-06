<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Track</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
            padding: 10px 0; 
            width: 100%;
            margin-bottom: 20px; 
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            width: 100%; 
            padding: 0 20px; 
        }

        .chart-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px; 
            padding: 20px;
            flex: 1; 
            max-width: 400px; 
        }

        canvas {
            display: block;
            margin: auto;
            max-width: 100%; 
        }
    </style>
</head>
<body>
<header>
    <h1>Elderly Care</h1>
</header>
<h1>Health Track</h1>
<div class="container">
    <div class="chart-container">
        <canvas id="heartRateChart" width="400" height="200"></canvas>
    </div>
    <div class="chart-container">
        <canvas id="temperatureChart" width="400" height="200"></canvas>
    </div>
</div>

<script>
    var heartRateData = [72, 74, 76, 78, 80, 82];
    var temperatureData = [36.5, 36.7, 36.8, 36.9, 37.0, 37.2];

    var heartRateCanvas = document.getElementById('heartRateChart');
    var temperatureCanvas = document.getElementById('temperatureChart');
    var heartRateCtx = heartRateCanvas.getContext('2d');
    var temperatureCtx = temperatureCanvas.getContext('2d');

    drawBarChart(heartRateCtx, heartRateData, 'Heart Rate (bpm)', 'rgb(255, 99, 132)');

    drawBarChart(temperatureCtx, temperatureData, 'Temperature (°C)', 'rgb(54, 162, 235)');

    function drawBarChart(ctx, data, label, color) {
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5', 'Day 6'],
                datasets: [{
                    label: label,
                    data: data,
                    backgroundColor: color,
                    borderColor: color,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    }
</script>
</body>
</html>
