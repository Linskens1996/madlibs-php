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
                <form class="questionForm" action="indexresult.php" method="post">
                    <h2>Er heerst paniek...</h2>
                    <p>Welk dier zou je nooit als huisdier willen hebben?</p><input id="inputtext" type="text" name="answerOne" value=""><br>
                    <p>Wie is de belangrijkste persoon in je leven?</p><input id="inputtext" type="text" name="answerTwo" value=""><br>
                    <p>In welk land zou je graag willen wonen?</p><input id="inputtext" type="text" name="answerThree" value=""><br>
                    <p>Wat doe je als je je verveelt?</p><input id="inputtext" type="text" name="answerFour" value=""><br>
                    <p>Met welk speelgoed speelde je als kind het meest?</p><input id="inputtext" type="text" name="answerFive" value=""><br>
                    <p>Bij welke docent spijbel je het liefst?</p><input id="inputtext" type="text" name="answerSix" value=""><br>
                    <p>Als je €100.000,- had, wat zou je dan kopen?</p><input id="inputtext" type="text" name="answerSeven" value=""><br>
                    <p>Wat is je favoriete bezigheid?</p><input id="inputtext" type="text" name="answerEight" value=""><br>
                    <input class="formSubmit" type="submit" name="submit" value="Submit">
                </form>
            </div>
    </body>
</html>