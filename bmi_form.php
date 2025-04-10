داخل views
ملفين 
ملف bmi_form.php
<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
</head>
<body>
    <h2>Enter Your Details</h2>
    <form method="post" action="index.php">
        <input type="text" name="name" placeholder="Name" required>
        <input type="number" name="weight" placeholder="Weight (kg)" required>
        <input type="number" step="0.01" name="height" placeholder="Height (m)" required>
        <button type="submit">Calculate BMI</button>
    </form>
</body>
</html>
و ملف bmi_result.php
<!DOCTYPE html>
<html>
<head>
    <title>BMI Result</title>
</head>
<body>
    <h2>Your BMI Result</h2>
    <p>BMI: <?php echo $bmi; ?></p>
    <p>Status: <?php echo $status; ?></p>
    <a href="index.php">Go Back</a>
</body>
</html>
