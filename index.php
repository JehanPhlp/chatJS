<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Chat Papeete</title>
        <link rel="stylesheet" href="src/style.css">
        <script src="src/script.js"></script>
        <script src="dependencies/jquery.js"></script>
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
        <input type="text" id="champPseudo" placeholder="Nom d'utilisateur">
        <table id="listeMessages"></table>
        <script>
            $('#listeMessages').load('src/recuperer.php');
            setInterval(function() {
                $('#listeMessages').load('src/recuperer.php');
            }, 1000);
        </script>
        <form action="">
            <input type="text" id="champMessage" placeholder="Ecrivez votre message">
            <input type="submit" value="Envoyer" onclick="envoyerMessage(getChampMessage(), getAuteur())">
        </form>
    </body>
</html>