<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password']; // In a real application, you shouldn't display this
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 50px;
            color: #333;
        }

        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .data {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .data span {
            font-weight: bold;
            color: #4CAF50;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            text-align: center;
        }

        .back-link a {
            text-decoration: none;
            color: #fff;
            background-color: #4CAF50;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .back-link a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h2>Submitted Form Data</h2>

    <div class="container">
        <div class="data">
            <span>Name:</span> <?php echo htmlspecialchars($name); ?>
        </div>
        <div class="data">
            <span>Phone:</span> <?php echo htmlspecialchars($phone); ?>
        </div>
        <div class="data">
            <span>Email:</span> <?php echo htmlspecialchars($email); ?>
        </div>
        <div class="data">
            <span>Password:</span> <?php echo htmlspecialchars($password); ?>
        </div>

        <div class="back-link">
            <a href="form-php.php">Go Back to Registration</a>
        </div>
    </div>

</body>
</html>
