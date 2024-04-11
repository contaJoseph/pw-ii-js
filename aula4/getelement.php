<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <title>Exemplo do GetElement</title>
    <script>
        function mudaCor(novaCor)
        {
            const elem = document.getElementById("paragrafo");
            elem.style.color = novaCor;
        }
    </script>

    <body>
        <p id="paragrafo">Texto</p>
        <button onclick="mudaCor('blue');">Blue</button>
        <button onclick="mudaCor('red');">Red</button>
    </body>
</body>
</html>