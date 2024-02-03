// Import Chart.js library (include the library in your project)
// Example: <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

// Dummy data
const days = ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5'];
const heartRateData = [72, 75, 80, 78, 76];
const temperatureData = [98.6, 98.8, 99.0, 98.7, 98.9];

// Heart rate chart
const heartRateCtx = document.getElementById('heartRateChart').getContext('2d');
new Chart(heartRateCtx, {
    type: 'line',
    data: {
        labels: days,
        datasets: [{
            label: 'Heart Rate',
            data: heartRateData,
            borderColor: 'red',
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Temperature chart
const temperatureCtx = document.getElementById('temperatureChart').getContext('2d');
new Chart(temperatureCtx, {
    type: 'line',
    data: {
        labels: days,
        datasets: [{
            label: 'Temperature',
            data: temperatureData,
            borderColor: 'blue',
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
