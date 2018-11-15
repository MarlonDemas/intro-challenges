 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>PHP Arrays</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
 </head>
 <body>
    <div class="container">
        <h1 class="title is-1" style="text-align: center">PHP Arrays Challenge</h1>
        <div class="columns">
            <div class="column">
                <h2 class="title is-2">Task 1</h2>
                <?php

                    $favFruitsAndVeg = array('waterlemon',  'sweet melon', 'guava', 'tomato', 'carrot');
                ?>
                <ul>
                    <?php
                        echo "<li> The first element is <strong>" .$favFruitsAndVeg[key($favFruitsAndVeg)] ."</strong></li>";
                        echo "<li> The last element is <strong>" .end($favFruitsAndVeg) ."</strong></li>";
                        array_shift($favFruitsAndVeg);
                        array_push($favFruitsAndVeg, 'brocolli');
                        echo "<li> The new first element is <strong>".$favFruitsAndVeg[key($favFruitsAndVeg)]."</strong></li>";
                        echo "<li> The new last element is <strong>".end($favFruitsAndVeg)."</strong></li><br>";
                        $upgrade = array('strawberries', 'sweet corn', 'mango');
                        array_splice($favFruitsAndVeg, 2, 1, $upgrade);
                        sort($favFruitsAndVeg);
                        echo 'This is the array seperated by comma: <strong><br>'.implode(', ', $favFruitsAndVeg) . "</strong>";
                    ?>
                </ul>
            </div>
            <div class="column">
                <h2 class="title is-2">Task 2</h2>

                <?php 
                    $marlon = array('height' => 172, 'age' => 21, 'shoe size' => 8);
                    echo 'My height is ' . $marlon['height'] . ' cm,<br>';
                    echo  'My age is ' . $marlon['age'] . ' years old,<br>';
                    echo  'and my shoe size is size ' . $marlon['shoe size'] . '.<br><br>';
                    $marlon['height'] += 10;
                    echo  'After a growth spurt my new height is ' . $marlon['height'] . ' cm,<br>';
                    $marlon['age'] -= 2;
                    echo  'and after drinking form the fountain of youth my new age is ' . $marlon['age'] . ' years old.<br>';
                ?>
            </div>
            <div class="column">
                <h2 class="title is-2">Task 3</h2>

                <?php
                    $dillon = array('height' => 184, 'age' => 19, 'shoe size' => 9);
                    $cyle = array('height' => 162, 'age' => 16, 'shoe size' => 6);
                    $class = array();
                    array_push($class, $marlon, $dillon, $cyle);
                    echo 'This is the height of the first person: <strong>' . $class[0]['height'] . ' cm</strong>,<br>';
                    echo  'This is the age of the second person: <strong>' . $class[1]['age'] . ' years old</strong>,<br>';
                    echo  'and this is the shoe size of the third person: <strong>size ' . $class[2]['shoe size'] . '</strong><br><br>';
                    $sbu = array('height' => 177, 'age' => 20, 'shoe size' => 7);
                    array_unshift($class, $sbu);
                    echo 'The height of the new person is ' . $class[0]['height'] . ' cm,<br>';
                    echo  'The age of the new person is ' . $class[0]['age'] . ' years old,<br>';
                    echo  'and the shoe size of the new person is size ' . $class[0]['shoe size'] . '.<br><br>';
                ?>
            </div>
        </div>
    </div>
 </body>
 </html>
