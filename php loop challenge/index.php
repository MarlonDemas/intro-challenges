<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Loop Challenge</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css"/>
    </head>
    <body>
    <h1 class="title is-1 has-text-centered">PHP Loop Challenge</h1>
    <hr>
        <section class="section">
        <h2 class="title is-2">Challenge 1</h2>
        <?php
            for ($i=1; $i < 11; $i++) { 
                echo "$i bean<br>";
            }
        ?>
        </section>
        <section class="section">
        <h2 class="title is-2">Challenge 2</h2>
        <?php
            $names = array('Marlon', 'Miguel', 'Urick', 'Evan', 'Jesse');
            $hair = array('black', 'brown', 'red', 'blue', 'purple');
            $age = array(21, 24, 25, 19, 22);
            $height = array(1.54, 1.38, 1.45, 1.52, 1.41);

            for($i = 0; $i < count($names); $i++){
                echo $names[$i] . ' has ' . $hair[$i] . " hair, is " . $age[$i] . " years old and is " . $height[$i] . " meters tall. </br>";
            }
        ?>
        </section>
    </body>
</html>