<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medication Schedule</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        header {
            background-color: #2c3e50;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            width: 100%;
            margin-bottom: 20px;
        }

        .container {
            max-width: 600px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #000;
        }

        h2 {
            text-align: center;
            color: #000;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="time"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="button"],
        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="button"]:hover,
        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        #medicationFields {
            border-top: 1px solid #ccc;
            padding-top: 15px;
        }

        #medicationFields:not(:first-child) {
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <header>
        <h1 style="color: #fff;">Elderly Care</h1>
    </header>
    <div class="container">
        <h1 style="color: black;">Medication Schedule</h1>

        <h2 style="color: black;">Add Medication</h2>
        <form id="medicationForm" action="<?= base_url('medication/add_medication') ?>" method="post">
            <div id="medicationFields">
                <label for="medicine_name">Medicine Name:</label>
                <input type="text" name="medicine_name[]" required>

                <label for="dosage">Dosage:</label>
                <input type="text" name="dosage[]" required>

                <label for="timing">Timing:</label>
                <input type="time" name="timing[]" required>
            </div>

            <input type="button" value="Add More Medication" onclick="addMedicationField()">
            <input type="submit" value="Save Medications">
        </form>

        <input type="button" value="View Scheduled Medications" onclick="viewScheduledMedications()">
    </div>

    <script>
        function addMedicationField() {
            var medicationField = document.getElementById('medicationFields');
            var clone = medicationField.cloneNode(true);
            document.getElementById('medicationForm').appendChild(clone);
        }

        function viewScheduledMedications() {
            window.location.href = '<?= base_url('medication/view_scheduled_medications') ?>';
        }
    </script>
</body>

</html>