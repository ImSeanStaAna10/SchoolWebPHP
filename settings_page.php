<?php
// settings_page.php

include 'db_connect.php'; // Make sure this file connects to your DB

// Load settings
$query = "SELECT * FROM style_settings";
$result = mysqli_query($conn, $query);
$settings = [];
while ($row = mysqli_fetch_assoc($result)) {
    $settings[$row['setting_key']] = $row['setting_value'];
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST as $key => $value) {
        $value = mysqli_real_escape_string($conn, $value);
        $update = "UPDATE style_settings SET setting_value='$value' WHERE setting_key='$key'";
        mysqli_query($conn, $update);
    }
    echo "<script>alert('Settings updated successfully!'); window.location.href='settings_page.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Style Settings Panel</title>
    <style>

        
        body {
            font-family: Arial;
            padding: 30px;
            background: #f4f4f4;
        }
        form {
            background: white;
            padding: 25px;
            border-radius: 8px;
            max-width: 700px;
            margin: auto;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #007bff;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 7px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn-submit {
            background: #28a745;
            color: white;
            border: none;
            padding: 10px 25px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
        .btn-submit:hover {
            background: #218838;
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>

<div class = "container" style="background-color: <?php echo $settings['background_color']; ?>;">
    <h2>SETTINGS</h2>

    <form method="POST">
        <?php foreach ($settings as $key => $value): ?>
            <div class="form-group">
                <label for="<?= $key ?>"><?= ucwords(str_replace("_", " ", $key)) ?></label>
                <input type="text" name="<?= $key ?>" id="<?= $key ?>" value="<?= htmlspecialchars($value) ?>">
            </div>
        <?php endforeach; ?>
        <button type="submit" class="btn-submit">Save Settings</button>
    </form>
    </div>

    <?php include 'footer.php'; ?>

</body>
</html>
