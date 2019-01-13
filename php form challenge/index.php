 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>PHP Form Challenge</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css"/>
 </head>
 <body>
    <h1 class="title is-1 has-text-centered">PHP Form Challenge</h1>
    <hr>     
    <section class="section">
        <h2 class="title is-2">Challenge 1</h2>
        <form class="form" action="info.php" method="post">
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input type="text" name="name" class="input" placeholder="Name">
                </div>
            </div>
            <div class="field">
                <label class="label">Surname</label>
                <div class="control">
                    <input type="text" name="surname" class="input" placeholder="Surname">
                </div>
            </div>
            <div class="field">
                <label class="label">Age</label>
                <div class="control">
                    <input type="text" name="age" class="input" placeholder="Your age">
                </div>
            </div>
            <div class="field">
                <label class="label">Sex</label>
                <div class="control">
                    <input type="text" name="sex" class="input" placeholder="Your gender">
                </div>
            </div>
            <div class="field">
                <label class="label">Favourite Sport</label>
                <div class="control">
                    <input type="text" name="sport" class="input" placeholder="Your favourite sport">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button class="button is-primary">Submit</button>
                </div>
            </div>
        </form>
    </section>
 </body>
 </html>