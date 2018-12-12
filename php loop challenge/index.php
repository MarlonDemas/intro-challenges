<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css"/>
    </head>
    <body>
    <h1 class="title is-1 has-text-centered">PHP Loop Challenge</h1>
    <hr>
        <section class="section">
        <h2 class="title is-2">Challenge 1</h2>
        <?php
            for ($i=1; $i < 11; $i++) { 
                echo  '<div class="box has-text-centered">'."$i bean<br>".'</div>';
            }
        ?>
        </section>
    </body>
</html>