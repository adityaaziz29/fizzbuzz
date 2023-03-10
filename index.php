<!DOCTYPE html>
<html>
<head>
    <title>FizzBuzz Program with PHP</title>
</head>
<body>
    <ul>
        <?php
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "<li>{$i} FizzBuzz</li>";
            } elseif ($i % 3 == 0) {
                echo "<li>{$i} Fizz</li>";
            } elseif ($i % 5 == 0) {
                echo "<li>{$i} Buzz</li>";
            } else {
                echo "<li>{$i}</li>";
            }
        }
        ?>
    </ul>
</body>
</html>
