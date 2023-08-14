<?php

include('mailer.php')

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mailer</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link href="./src/input.css" rel="stylesheet">


</head>

<body>
    
    <div class="header">
        <h1>PHP SMTP MAILER</h1>
        <p>Input Data</p>
    </div>
    <form action="mailer.php" method="post">

        <label for="from">From:</label>
        <input type="text" name="from">

        <label for="from">To:</label>
        <input type="text" name="to">

        <label for="from">Subject:</label>
        <input type="text" name="subject"> <br><br><br>

        <label for="message"> Paste Html template here!</label>
        <textarea name="message" rows="5" cols="50" placeholder="Type HTML or text here..."></textarea>
        <button type="button" onclick="updateIframe()">Preview Template</button>
        <iframe id="myframe"></iframe>

        <button name="submit">Send</button>
    </form>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        function updateIframe() {
            var myFrame = $("#myframe").contents().find('body');
            var textareaValue = $("textarea").val();
            myFrame.html(textareaValue);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>