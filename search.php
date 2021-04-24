<?php

    if (isset($_GET['search'])) {
        $search = $_GET['search'];
    }

    $conn = new PDO("mysql:host=localhost;dbname=autocompletion;charset=UTF8", "root", "");
    $sql = "SELECT id, nom, prenom FROM stars WHERE nom LIKE '%$search%' OR prenom LIKE '%$search%'";
    $result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

<table>
    <td class="link"> <input class="" id="closeSearch" type="button" value="x"> </td>
    <?php
    foreach ($result as $data) {
        echo '
            <tr">
                <td> <a class="" href=index.php?id=' . $data['id'] . '>' . $data['nom'] . ' ' . $data['prenom']. ' </a> </td>
            </tr>
            ';
    }
    ?>
</table>