<?php
$conn = new PDO("mysql:host=localhost;dbname=jeremy-dejoux_autocompletion;charset=UTF8", "Jeremy", "Minato6510");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM stars WHERE id = $id ";
    $result = $conn->query($sql)->fetch(PDO::FETCH_ASSOC);
?>
    <h1> <?php echo $result["nom"], $result['prenom']; ?> </h1>
    <table style="width: 100% !important;">
        <thead>
            <tr>
                <th>Nom</th>
                <th>prenom</th>
                <th>alias</th>
                <th>age</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $result['nom']; ?></td>
                <td><?php echo $result['prenom']; ?></td>
                <td><?php echo $result['alias']; ?></td>
                <td><?php echo $result['age']; ?></td>
            </tr>
        </tbody>
    </table>
<?php
} else if (isset($_GET['nom'])) {
    $nom = $_GET['nom'];
    $sql = "SELECT * FROM stars WHERE nom = '$nom' ";
    $result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>prenom</th>
                <th>alias</th>
                <th>age</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($result as $result) {
            ?>
                <tr>
                    <td>
                        <h3><a class="search_name" href="index.php?id=<?php echo $result['id']; ?>"><?php echo $result["nom"], $result['prenom']; ?></a></h3>
                    </td>
                    <td><?php echo $result['nom']; ?></td>
                    <td><?php echo $result['prenom']; ?></td>
                    <td><?php echo $result['alias']; ?></td>
                    <td><?php echo $result['age']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
<?php } else if (isset($_GET['prenom'])) {
    $sql = "SELECT * FROM stars ORDER BY age";
    $result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>prenom</th>
                <th>alias</th>
                <th>age</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($result as $result) {
            ?>
                <tr>
                    <td>
                        <h3><a class="search_name" href="index.php?id=<?php echo $result['id']; ?>"><?php echo $result["nom"], $result['prenom']; ?></a></h3>
                    </td>
                    <td><?php echo $result['nom']; ?></td>
                    <td><?php echo $result['prenom']; ?></td>
                    <td><?php echo $result['alias']; ?></td>
                    <td><?php echo $result['age']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
<?php }
