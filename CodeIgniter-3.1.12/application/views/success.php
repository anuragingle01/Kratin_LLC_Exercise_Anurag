<!-- success.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
</head>
<body>
    <h1>Medication Successfully Added</h1>
    <p>Your medication has been added successfully with the following details:</p>
    
    <ul>
        <li>Medication ID: <?php echo $medication_id; ?></li>
        <!-- Add additional details as needed -->
    </ul>

    <!-- You can provide links or buttons to navigate back to other pages if needed -->
    <p><a href="<?php echo base_url('medications'); ?>">Add Another Medication</a></p>
</body>
</html>
