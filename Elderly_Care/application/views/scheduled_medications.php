<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduled Medications</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 20px;
    }

    h1, h2 {
    text-align: center;
    margin-bottom: 20px;
    }

    table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    }

    th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    }

    th {
    background-color: #f2f2f2;
    }

    input[type="button"] {
    display: block;
    margin: 20px auto;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    }

    input[type="button"]:hover {
    background-color: #0056b3;
    }
    </style>
</head>

<body>
    <h1>Scheduled Medications</h1>
    <table>
        <thead>
            <tr>
                <th>Medicine Name</th>
                <th>Dosage</th>
                <th>Timing</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($scheduled_medications): ?>
                <?php foreach ($scheduled_medications as $medication): ?>
                    <tr>
                        <td><?= $medication->medicine_name ?></td>
                        <td><?= $medication->dosage ?></td>
                        <td><?= $medication->timing ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No scheduled medications found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>


</html>