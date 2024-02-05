<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medication Form</title>
</head>
<body>
    <h2>Medication Reminder</h2>

    <button onclick="showMedicationForm()">Add Medication</button>

    <div id="medicationForm" style="display: none;">
        <h3>Enter Medication Details</h3>
        <form action="<?= site_url('medications/save_medication') ?>" method="post">
            <label for="medication_name">Medication Name:</label>
            <input type="text" name="medication_name" required><br>

            <label for="dosage">Dosage:</label>
            <input type="text" name="dosage" required><br>

            <label for="timing">Timing:</label>
            <input type="time" name="timing" required><br>

            <!-- Add other fields as needed -->

            <input type="submit" value="Save Medication">
        </form>
    </div>

    <!-- Include JavaScript to toggle the visibility of the form -->
    <script>
        function showMedicationForm() {
            var medicationForm = document.getElementById("medicationForm");
            medicationForm.style.display = "block";
        }
    </script>
</body>
</html>
