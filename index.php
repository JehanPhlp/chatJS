<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Chat Papeete</title>
        <link rel="stylesheet" href="src/style.css">
        <script src="src/script.js"></script>
        <script src="dependencies/jquery.js"></script>
        <script>
            document.addEventListener('keydown', function(event) {
                if(event.key == 'Enter') {
                    envoyerMessage(getChampMessage(), getAuteur(), event);
                }
            });
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
        <form>
            <input type="text" id="champMessage" placeholder="Ecrivez votre message">
            <input type="button" value="Envoyer" onclick="envoyerMessage(getChampMessage(), getAuteur())">
        </form>
    </body>
</html>