<!DOCTYPE html>
<html>
<head>
    <title>Sum of Even Numbers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 20px;
            background-color: #f4f4f4;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
        }

        .container {
            width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 3px solid #ccc;
            border-color: lightseagreen;
            border-radius: 5px;
        }

        h3 {
            margin: 0;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 98%;
            padding-top: 17px;
            padding-left: 9px;
            margin: 7px 0;
            font-size: 18px;
            color: black bold;
        }

        button {
            background-color: lightseagreen;
            color: white bold;
            font-size: 20px;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: skyblue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3><u>Sum of Even Numbers</u></h3><br><br>
        <form method="post">
            <label for="numbers">Enter an array of numbers (separated by comma):</label><br><br>
            <input type="text" name="numbers" id="numbers" required>
            <button type="submit"><b>Calculate</b></button>
        </form><br>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $numbers = explode(',', $_POST['numbers']);
            $sum = 0;
            
            foreach ($numbers as $number) {
                $number = trim($number);
                if (is_numeric($number) && $number % 2 == 0) {
                    $sum += $number;
                }
            }
            
            echo "<p><b>Sum of Even Numbers: $sum</b></p>";
        }
        ?>
    </div>
</body>
</html>