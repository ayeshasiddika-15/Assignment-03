<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 20px;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 3px solid #ccc;
            border-radius: 5px;
            border-color: lightseagreen;
        }

        h3 {
            text-align: center;
            margin-top: 20px;
        }

        form {
            text-align: center;
            margin-top: 20px;
        }

        label {
            font-weight: bold;
        }

        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 18px;
            width:60%;
        }

        button {
            background-color: lightseagreen;
            color: white bold;
            font-size: 20px;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-weight: bold;
            cursor: pointer;
            width: 92%;
            
        }
        button:hover {
            background-color: skyblue;
        }

        .results {
            margin-top: 20px;
            text-align: center;
        }

        h2 {
            margin-bottom: 10px;
        }

        .result {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-left: 35px;
            margin-right: 35px;
            margin-top: 10px;
            
        }
    </style>
</head>
<body>
<div class="container">
    <h3><u>Calculation of Sum, Difference, Product & Quotient of Two Numbers</u></h3><br>

    <form action="" method="post">
        <label for="num1">Enter the First Number:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Enter the Second Num:</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <button type="submit">Calculate</button>
    </form>

    <div class="results">
        <?php
        if (isset($_POST['num1']) && isset($_POST['num2'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            $sum = $num1 + $num2;
            $difference = $num1 - $num2;
            $product = $num1 * $num2;

            if ($num2 != 0) {
                $quotient = $num1 / $num2;
            } else {
                $quotient = "Cannot divide by zero";
            }

            echo "<h3><u>Results:</u></h3>";
            echo '<div class="result">Sum: ' . $sum . '</div>';
            echo '<div class="result">Difference: ' . $difference . '</div>';
            echo '<div class="result">Product: ' . $product . '</div>';
            echo '<div class="result">Quotient: ' . $quotient . '</div>';
        }
        ?>
    </div>
    </div>
</body>
</html>