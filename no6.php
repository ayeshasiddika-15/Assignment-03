<!DOCTYPE html>
<html>
<head>
    <title>Array Operations</title>
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
            max-width: 700px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 3px solid #ccc;
            border-radius: 5px;
            border-color: lightseagreen;

        }

        h3 {
            color: #333;
            text-align: center;
        }

        .task {
            margin-bottom: 20px;
            margin-left: 24px;
            padding: 7px;
            border: 1px solid #ccc;
            border-radius: 5px;
            border-color: lightseagreen;
            width: 91%;
        }

        p {
            font-size: 20px;
            font-weight: initial;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3><u>Array Operations</u></h3><br>
        
        <div class="task">
            <p>
                <?php
                $numbers = array(2, 4, 6, 8, 10);
                echo "Original array: " . implode(", ", $numbers);
                ?>
            </p>
        </div>

        <div class="task">
            <p>
                <?php
                $numbers = array(2, 4, 6, 8, 10);
                // i. Print the first element of the array.
                echo "i. The first element of the array is: " . $numbers[0];
                ?>
            </p>
        </div>

        <div class="task">
            <p>
                <?php
                // ii. Print the last element of the array.
                $lastIndex = count($numbers) - 1;
                echo "ii. The last element of the array is: " . $numbers[$lastIndex];
                ?>
            </p>
        </div>

        <div class="task">
            <p>
                <?php
                // iii. Add a new element with the value of 12 to the end of the array.
                $newValue = 12;
                $numbers[] = $newValue;
                echo "iii. Added $newValue to the end of the array. Updated array: " . implode(", ", $numbers);
                ?>
            </p>
        </div>

        <div class="task">
            <p>
                <?php
                // iv. Calculate the sum of all the elements in the array and print the result.
                $sum = array_sum($numbers);
                echo "iv. The sum of all elements in the array is: $sum";
                ?>
            </p>
        </div>
    </div>
</body>
</html>
