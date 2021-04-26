<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">    
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="ressources/index.css">

    <title>Autocompletion</title>
</head>

<body>

    <header>
    </header>


    <main id="main">

		<h1 id="titre">Star Link</h1>

        <form action="search.php" id="recherche" method="get">

                <input class="" type="search" placeholder="Recherchez une Star" aria-label="Search" name="search" id="search" autocomplete="off">

				<input id="research" type="submit" value="Search">     
        </form>

		<div id="data">
            <?php include_once('element.php'); ?>
        </div>
    </main>

    <footer class="">
        <script src="ressources/script.js"></script>
    </footer>

   
</body>
</html>