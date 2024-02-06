<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medication Schedule</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Medication Schedule</h1>

    <h2>Add Medication</h2>
    <form id="medicationForm" action="<?= base_url('medication/add_medication') ?>" method="post">
        <div id="medicationFields">
            <label for="medicine_name">Medicine Name:</label>
            <input type="text" name="medicine_name[]" required><br>

            <label for="dosage">Dosage:</label>
            <input type="text" name="dosage[]" required><br>

            <label for="timing">Timing:</label>
            <input type="time" name="timing[]" required><br>
        </div>

        <input type="button" value="Add More Medication" onclick="addMedicationField()">
        <input type="submit" value="Save Medications">

    </form>
            <input type="button" value="View Scheduled Medications" onclick="viewScheduledMedications()">

    <script>
        function addMedicationField() {
            var medicationField = document.getElementById('medicationFields');
            var clone = medicationField.cloneNode(true);
            document.getElementById('medicationForm').appendChild(clone);
        }
        function viewScheduledMedications() {
            window.location.href = '<?= base_url('medication/get_scheduled_medications') ?>';
        }

    </script>
</body>
</html>
