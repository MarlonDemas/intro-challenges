<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Variable Functions</title>
</head>
<body>
    <?php
        $line = "<br>";

        $name = "  Bob  ";

        $age = "thirty five";
        
        $job = "plumber";
        
        $carMake = " Toyota";
        
        $carColour = "RED";
        
        $happy = true;
        
        $time = "this many";

        $name = trim($name, " ");

        echo $name . $line;

        $age = str_replace($age, 35, $age);

        echo $age . $line;

        $carColour = strtolower($carColour);
        echo $carColour . $line;

        $time = strlen($time);
        echo $time . $line;

        $car = $carColour . ' ' . $carMake;
        echo $car . $line;
        
        $timeTillRetirement = 65 - $age;
        echo $timeTillRetirement . $line . $line;

        $story = "$name is a $job. He drives a $car and works $time hours a day. He is $age years old and is $timeTillRetirement years from retirement. He is happy with his life.";
        echo $story, "\n";

    ?>
</body>
</html>