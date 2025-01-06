<?php
session_start();    
if (!isset($_SESSION['views'])){
    $_SESSION['views'] = 0;
}else{
    $_SESSION['views']++;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page Counter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            color: #2c3e50;
            font-size: 24px;
        }

        p {
            color: #7f8c8d;
            font-size: 18px;
        }

        .counter {
            font-size: 22px;
            font-weight: bold;
            color: #16a085;
        }

        .refresh-note {
            font-size: 14px;
            color: #e74c3c;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Page Counter</h2>
        <p>This page has been viewed <span class="counter"><?php echo $_SESSION['views']; ?></span> times</p>
        <p class="refresh-note">Refresh the page to see the counter increase</p>
    </div>

</body>
</html>