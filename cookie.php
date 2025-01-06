<?php
$expiration = time() + (60 * 60 * 24 * 30); // Set cookie expiration for 30 days

// Check if the 'last-visited' cookie is set
if (!isset($_COOKIE['last-visited'])) {
    setcookie('last-visited', date('Y-m-d H:i:s'), $expiration); // Set the cookie with current date and time
}

// Set the last visited date from the cookie, or fallback to 'unknown' if cookie is not set
$lastvisitedDateTime = $_COOKIE['last-visited'] ?? 'unknown';

// Update the 'last-visited' cookie on every visit
setcookie('last-visited', date('Y-m-d H:i:s'), $expiration);
?>

<html>
    <head>
        <title>Last Visited Page</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                color: #333;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .container {
                text-align: center;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                padding: 30px;
                width: 300px;
            }

            h2 {
                color: #4CAF50;
                margin-bottom: 20px;
                font-size: 24px;
            }

            p {
                font-size: 18px;
                color: #555;
                margin: 10px 0;
            }

            .message {
                font-size: 18px;
                color: #333;
                font-weight: bold;
            }

            .first-visit {
                color: #f44336;
            }

            .last-visit {
                color: #4CAF50;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Last Visited Page</h2>
            <p class="message">
                <?php
                if ($lastvisitedDateTime !== 'unknown') {
                    echo '<span class="last-visit">Last visited on: ' . $lastvisitedDateTime . '</span>';
                } else {
                    echo '<span class="first-visit">Welcome! This is your first visit.</span>';
                }
                ?>
            </p>
        </div>
    </body>
</html>
