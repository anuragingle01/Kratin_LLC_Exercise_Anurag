<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medication Schedule</title>
    <!-- Add JavaScript for reminders -->
    <script>
        function showReminder(medicineName) {
            // Make an Ajax request to a CodeIgniter controller to send an email
            $.ajax({
                type: 'POST',
                url: '<?= base_url('medication/send_email') ?>',
                data: {
                    medicine_name: medicineName
                },
                success: function(response) {
                    alert('Email sent: ' + response);
                },
                error: function(error) {
                    alert('Error sending email: ' + error.responseText);
                }
            });
        }
    </script>

</head>
<!-- <body>
    <h1>Medication Schedule</h1>

    <table border="1">
        <tr>
            <th>Medicine Name</th>
            <th>Dosage</th>
            <th>Timing</th>
        </tr>
        <?php foreach ($medications as $medication) : ?>
        <tr>
            <td><?= $medication->medicine_name ?></td>
            <td><?= $medication->dosage ?></td>
            <td><?= $medication->timing ?></td>
        </tr>
        <?php endforeach; ?>
    </table> -->

<h2>Add Medication</h2>
<form action="<?= base_url('medication/add_medication') ?>" method="post">
    <label for="medicine_name">Medicine Name:</label>
    <input type="text" name="medicine_name" required><br>

    <label for="dosage">Dosage:</label>
    <input type="text" name="dosage" required><br>

    <label for="timing">Timing:</label>
    <input type="time" name="timing" required><br>

    <input type="submit" value="Add Medication">
</form>

</body>

</html>