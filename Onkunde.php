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
                <h2>Onkunde</h2>
                <form class="questionForm" action="onkunderesult.php" method="post">
                    <p>Wat zou je graag willen kunnen?</p><input id="inputtext" type="text" name="answerOne" value=""><br>
                    <p>Met welke persoon kun je goed opschieten?</p><input id="inputtext" type="text" name="answerTwo" value=""><br>
                    <p>Wat is je favoriete getal?</p><input id="inputtext" type="text" name="answerThree" value=""><br>
                    <p>Wat heb je altijd bij je als je op vakantie gaat?</p><input id="inputtext" type="text" name="answerFour" value=""><br>
                    <p>Wat is je beste persoonlijke eigenschap?</p><input id="inputtext" type="text" name="answerFive" value=""><br>
                    <p>Wat is je slechtste persoonlijke eigenschap?</p><input id="inputtext" type="text" name="answerSix" value=""><br>
                    <p>Wat is het ergste wat je kan overkomen?</p><input id="inputtext" type="text" name="answerSeven" value=""><br>
                    <input class="formSubmit" type="submit" name="submit" value="Submit">
                </form>
            </div>
    </body>
</html>