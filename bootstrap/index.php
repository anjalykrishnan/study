<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <br><br>

        <!-- Grid system with three columns-->
        <div class="row">
            <div class="col-lg-4" style="background-color: #ffaaaa">Left</div>
            <div class="col-lg-4" style="background-color: #ffcc00">Middle</div>
            <div class="col-lg-4" style="background-color: #00ffff">Right</div>
        </div>

        <!-- highlighting methods -->
        <div>
            <br><br>
            <p>Marking is done using <mark> mark </mark> tag</p>
            <p>Codes can be highlighted using code tag. Eg: <code>setName('Remya');</code> and the result will be in red marked</p>

            <blockquote>
                <p>Blockquote is here</p>
                <footer>This is a footer in the blockquote</footer>
            </blockquote>

            <pre>
                Anything inside the pre tag is displayed as such.
                You can even write your code. For example:
                echo "hello world!";
            </pre>

            Keyboard input is highlighted using black color. Eg: <kbd>Cntrl+Alt+Del</kbd>
        </div>
    </div>
</body>
</html>