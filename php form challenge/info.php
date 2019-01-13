 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Description</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css"/>     
 </head>
 <body>
    <a href="index.php" class="button is-info">Home</a>
    <br>
    <br>
     <?php
        echo $_POST['name'] . " " . $_POST['surname'] . " is " . $_POST['age'] . " years old and he's a " . strtolower($_POST['sex']) . " whose favourite sport is " . strtolower($_POST['sport']) . ".";
     ?>
 </body>
 </html>