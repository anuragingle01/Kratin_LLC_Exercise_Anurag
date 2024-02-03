// Dummy data
const days = ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5'];
const heartRateData = [72, 75, 80, 78, 76];
const temperatureData = [98.6, 98.8, 99.0, 98.7, 98.9];

// Function to draw line chart on canvas
function drawLineChart(canvasId, labels, data, color, legend, yAxisTitle) {
    const canvas = document.getElementById(canvasId);
    const ctx = canvas.getContext('2d');

    // Set canvas size
    canvas.width = 400;
    canvas.height = 200;

    // Find maximum data value
    const maxData = Math.max(...data);

    // Define chart properties
    const chart = {
        margin: 20,
        width: canvas.width - 2 * 20,
        height: canvas.height - 2 * 20,
        data: data,
        labels: labels,
        color: color,
        maxData: maxData,
        legend: legend,
        yAxisTitle: yAxisTitle
    };

    // Draw chart axes and labels
    ctx.beginPath();
    ctx.moveTo(chart.margin, chart.margin);
    ctx.lineTo(chart.margin, chart.height + chart.margin);
    ctx.lineTo(chart.width + chart.margin, chart.height + chart.margin);
    ctx.stroke();

    // Draw Y-axis title
    ctx.save();
    ctx.translate(chart.margin - 40, chart.margin + chart.height / 2);
    ctx.rotate(-Math.PI / 2);
    ctx.textAlign = 'center';
    ctx.fillStyle = 'black';
    ctx.font = 'bold 14px Arial';
    ctx.fillText(chart.yAxisTitle, 0, 0);
    ctx.restore();

    // Draw data points and connect with lines
    for (let i = 0; i < chart.data.length; i++) {
        const x = i * (chart.width / (chart.data.length - 1)) + chart.margin;
        const y = chart.height - (chart.data[i] / chart.maxData) * chart.height + chart.margin;

        // Draw data points
        ctx.beginPath();
        ctx.arc(x, y, 5, 0, 2 * Math.PI);
        ctx.fillStyle = chart.color;
        ctx.fill();

        // Connect with lines
        if (i > 0) {
            ctx.beginPath();
            ctx.moveTo((i - 1) * (chart.width / (chart.data.length - 1)) + chart.margin, chart.height - (chart.data[i - 1] / chart.maxData) * chart.height + chart.margin);
            ctx.lineTo(x, y);
            ctx.strokeStyle = chart.color;
            ctx.stroke();
        }
    }

    // Draw x-axis labels
    ctx.fillStyle = 'black';
    ctx.font = '12px Arial';
    for (let i = 0; i < chart.labels.length; i++) {
        const x = i * (chart.width / (chart.labels.length - 1)) + chart.margin;
        const y = chart.height + chart.margin + 15;
        ctx.fillText(chart.labels[i], x, y);
    }

    // Draw Y-axis labels
    ctx.textAlign = 'right';
    for (let i = 0; i <= 5; i++) {
        const yLabel = (i * maxData) / 5;
        const x = chart.margin - 10; // Adjusted positioning
        const y = chart.height - (i * chart.height) / 5 + chart.margin;
        ctx.fillText(yLabel.toFixed(1), x, y);
    }


    // Draw legend
    ctx.fillStyle = chart.color;
    ctx.fillRect(chart.width + 30, chart.margin + 5, 15, 15); // Adjusted positioning
    ctx.fillStyle = 'black';
    ctx.fillText(chart.legend, chart.width + 60, chart.margin + 18); // Adjusted positioning

}

// Draw heart rate chart with legend, title, and Y-axis label
drawLineChart('heartRateCanvas', days, heartRateData, 'red', 'Heart Rate', 'Beats per Minute');

// Draw temperature chart with legend, title, and Y-axis label
drawLineChart('temperatureCanvas', days, temperatureData, 'blue', 'Temperature', 'Temperature (°F)');
