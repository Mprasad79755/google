<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .board-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .board {
            display: grid;
            grid-template-columns: repeat(8, 50px);
            grid-template-rows: repeat(8, 50px);
            width: 400px;
            height: 400px;
            border: 2px solid black;
        }

        .cell {
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 30px;
            font-weight: bold;
            /* color: red */
        }

        .white {
            background-color: rgb(248, 244, 239);
            color: black;
        }

        .black {
            background-color: rgb(18, 17, 16);
            color: white;
        }

    </style>
</head>
<body>

    <div class="board-container">
        <h2>Chess Board</h2>
        
        <div class="board">
            <?php
            $isWhite = true;
            for($row = 1; $row <= 8; $row++) {
                for($col = 1; $col <= 8; $col++) {
                    // Determine the class based on whether it's a white or black square
                    $cellClass = $isWhite ? 'white' : 'black';
                    echo "<div class='cell $cellClass' style='text-color:red;'>" . $row . " ". $col . "</div>";
                    $isWhite = !$isWhite; // Toggle the color for the next cell
                }
                // After completing a row, toggle the starting color
                $isWhite = !$isWhite;
            }
            ?>
        </div>
        
    </div>

</body>
</html>
