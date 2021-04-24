<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <title>Autocompletion</title>
</head>

<body>

    <header>
        <nav class="">
            <a class="" href="index.php">Acceuil</a>
        </nav>
    </header>


    <main id="main" class="">

        <form class="">
                <input class="" type="search" placeholder="Recherchez une Star" aria-label="Search" name="search" id="search" autocomplete="off">

                <div id="data">
                    <?php include('element.php'); ?>
                </div>
        </form>

    </main>

    <footer class="">
        <div class="">© 2021 DEJOUX JEREMY Copyright</div>

        <script src="script.js"></script>
    </footer>

   
</body>
</html>