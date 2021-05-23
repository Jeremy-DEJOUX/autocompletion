<?php

    if (isset($_GET['search'])) {
        $search = $_GET['search'];
    }

    $conn = new PDO("mysql:host=localhost;dbname=jeremy-dejoux_autocompletion;charset=UTF8", "Jeremy", "Minato6510");
    $sql = "SELECT id, nom, prenom FROM stars WHERE nom LIKE '%$search%' OR prenom LIKE '%$search%'";
    $result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="ressources/search.css">
    <title>Search</title>
</head>
<body>
    <header>
        
    </header>

    <main id="main_search">
        <h1>Voici les résulat de votre recherche...</h1>
        <table>
            <?php
                foreach ($result as $data) {
                    echo '
                        <tr>
                            <td> <a class="search_name" href=index.php?id=' . $data['id'] . '>' . $data['nom'] . ' ' . $data['prenom']. ' </a> </td>
                        </tr>
                        ';
                }
            ?>
        </table>
    </main>

    <footer>
    </footer>
</body>
</html>

<!--- J'ai pas réussis à faire la barre de recherche dans chaque page problème -->

