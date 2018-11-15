 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>PHP Control Challenge</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
 </head>
 <body>
 <div class="container">
        <h1 class="title is-1" style="text-align: center">PHP Arrays Challenge</h1>
        <div class="columns">
            <div class="column">
                <h2 id="now" class="title is-2">Challenge 1</h2>
                <a href="index.php" class="button is-dark" style="margin-bottom: 20px">Change robot color</a>
                <?php
                    $light = array('green','red','yellow','blue');
                    switch ($light[rand(0,3)]) {
                        case 'red':
                            echo '<br>Robot is red:<br>';
                            echo '<h3 class="title is-3" style="color: white; text-align: center; background-color: red; padding-top:20px; padding-bottom:20px;">Stop</h3>';
                            break;
                        case 'yellow':
                            echo '<br>Robot is yellow:<br>';
                            echo '<h3 class="title is-3" style="text-align: center; background-color: yellow; padding-top:20px; padding-bottom:20px;">Slow down</h3>';
                            break;
                        case 'green':
                            echo '<br>Robot is green:<br>';
                            echo '<h3 class="title is-3" style="color: white; text-align: center; background-color: green; padding-top:20px; padding-bottom:20px;">Go</h3>';
                            break;                     
                        default:
                            echo '<br>Robot not working:<br>';
                            echo '<h3 class="title is-3" style="color: white; text-align: center; background-color: blue; padding-top:20px; padding-bottom:20px;">Treat as four way stop</h3>';
                            break;
                    }
                ?>                
            </div>
            <div class="column">
                <h2 class="title is-2">Challenge 2</h2>
                
                <?php 

                    $child = 5;

                    if ($child < 2) {
                        echo 'Yay, you get to go in for free!';
                    } else if($child <= 12) {
                        echo 'You need to pay R20 to enter';
                    } else if($child <= 17) {
                        echo 'You need to pay R30 to enter';
                    } else if($child <= 25) {
                        echo 'You need to pay R40 to enter';
                    } else if($child <= 64) {
                        echo 'You need to pay R60 to enter';
                    } else {
                        echo 'You need to pay R30 to enter';
                    }
                        
                ?>
            </div>
            <div class="column">
                <h2 class="title is-2">Challenge 3</h2>

                <?php
                    
                ?>
            </div>
        </div>
    </div>
 </body>
 </html>