<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <title>MadLibs</title>
    </head>
    <body>
        <h1 class="title">MadLibs</h1>
            <div id="background">
                <nav>
                    <ul>
                        <li><a href="index.php">Er heerst paniek...</a></li>
                        <li><a href="onkunde.php">Onkunde</a></li>
                    </ul>
                </nav>
                <h2>Er heerst paniek...</h2>
                <p>Er heerst paniek in <?php echo $_POST['answerThree'] ?>. Koning <?php echo $_POST['answerSix'] ?> is ten einde raad en als koning <?php echo $_POST['answerSix'] ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST['answerTwo'] ?>.</p>
                <p>"<?php echo $_POST['answerTwo'] ?>! Het is een ramp! Het is een schande!"</p>
                <p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
                <p>"Mijn <?php echo $_POST['answerOne'] ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST['answerFive'] ?> voor hem gekocht!"</p>
                <p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST['answerEight'] ?> leren?"</p>
                <p>"Maar Sire, daar kunt u toch uw <?php echo $_POST['answerSeven'] ?> voor gebruiken."</p>
                <p>"<?php echo $_POST['answerTwo'] ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
                <p>"<?php echo $_POST['answerFour'] ?>, Sire."</p><br>
                <style media="screen">
                    p {
                        padding: 0px 10px 0px 10px;
                    }
                </style>
            </div>
    </body>
</html>