
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Chat Papeete</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
        <script src="../dependencies/jquery.js"></script>
        <script>
            function getChampMessage() {
                return document.getElementById("champMessage").value;
            }
            function getAuteur() {
                return document.getElementById("champPseudo").value;
            }
            
        </script>
    </head>
    <body>
        <input type="text" id="champPseudo">
        <script>
            setInterval(function() {
                $('#listMessages').load('recuperer.php');
            }, 2000);
        </script>
        <table id="listeMessages"></table>
        <script>
            $('#listeMessages').load('recuperer.php');
        </script>
        <form action="">
            <input type="text" id="champMessage">
            <input type="submit" value="Envoyer" onclick="envoyerMessage(getChampMessage(), getAuteur())">
        </form>
    </body>
</html>
