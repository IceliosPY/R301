
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Boutons avec JavaScript</title>
    <script>
        function allerVers(page) {
            window.location.href = page;
        }
    </script>
</head>
<body>
    <button onclick="allerVers('page1.php')">Page 1</button>
    <button onclick="allerVers('page2.php')">Page 2</button>
    <button onclick="allerVers('page3.php')">Page 3</button>
    <button onclick="allerVers('page4.php')">Page 4</button>
    <button onclick="allerVers('page5.php')">Page 5</button>
    <button onclick="allerVers('page6.php')">Page 6</button>
</body>
</html>