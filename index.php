<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="ressources/index.css">

    <title>Autocompletion</title>
</head>

<body>

    <header>
    </header>


    <main id="main">
		<h1 id="titre">Star Link</h1>

        <form id="recherche" method="POST">
                <input class="" type="search" placeholder="Recherchez une Star" aria-label="Search" name="search" id="search" autocomplete="off">
				<input type="submit" value="Search">                
        </form>

		<div id="data">
            <?php include_once('element.php'); ?>
        </div>
    </main>

    <footer class="">
        <div class="">© 2021 DEJOUX JEREMY Copyright</div>

        <script src="ressources/script.js"></script>
    </footer>

   
</body>
</html>