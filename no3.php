<!DOCTYPE html>
<html>
<head>
    <title>Vowel Counter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 20px;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {

       
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 3px solid #ccc;
            border-radius: 5px;
            border-color: lightseagreen;
            text-align: center;
            width: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);

        }
           
        h1 {
            font-size: 24px;
            color: #333;
        }

        form {
            margin: 20px 0;
        }

        label {
            display: block;
            font-size: 22px;
            margin: 10px 0;
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
            font-weight: bold;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: skyblue;
        }

        p {
            font-size: 20px;
            font-weight: bold;
            margin-top: 7px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><u>Vowel Counter</u></h1><br>
        <form method="post">
            <label for="inputString">Enter a string:</label>
            <input type="text" id="inputString" name="inputString" required><br>
            <button type="submit">Count Vowels</button>
        </form><br>
        <?php
        function countVowels($input) {
            preg_match_all('/[a-zA-Z]/', $input, $matches);
            $letters = array_map('strtolower', $matches[0]);
            preg_match_all('/[aeiou]/', implode('', $letters), $vowels);
            return count($vowels[0]);
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['inputString'])) {
            $inputString = $_POST['inputString'];
            $vowelCount = countVowels($inputString);
            echo "<p>Number of Vowels: $vowelCount</p>";
        }
        ?>
    </div>
</body>
</html>
