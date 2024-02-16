<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Guessing Game</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(45deg, #3498db, #8e44ad, #3498db, #8e44ad) fixed;
            background-size: 400% 400%;
            animation: backgroundAnimation 15s infinite;
            color: #fff;
        }

        h1 {
            font-size: 3em;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 2s ease-out, pulse 2s infinite;
        }

        form {
            text-align: center;
            animation: fadeInUp 2s ease-out;
        }

        input {
            padding: 10px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input:hover {
            background-color: #45a049;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.2);
            }
            100% {
                transform: scale(1);
            }
        }

        @keyframes backgroundAnimation {
            0% {
                background-position: 0 0;
            }
            50% {
                background-position: 100% 0;
            }
            100% {
                background-position: 0 0;
            }
        }
    </style>
</head>
<body>
    <h1>Guess Game</h1><br>
    <form action="" method="post">
        <label for="no">Enter your number:</label>
        <input type="number" name="no" id="no" required>
        <br>
        <input type="submit" value="Submit">
        <marquee> MADE BY KRISHNA SARASWAT AND CHATGPT</marquee>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $you = isset($_POST["no"]) ? $_POST["no"] : null;
        $computer = rand(1, 10);

        echo "<p>";
        if ($you == $computer) {
            echo "CONGRATULATIONS!";
        } elseif ($computer > $you) {
            echo "TOO SMALL!";
        } else {
            echo "TOO BIG!";
        }
        echo "</p>";
    }
    ?>
</body>
</html>

      


