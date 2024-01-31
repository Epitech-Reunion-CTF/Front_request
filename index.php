<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Page</title>
</head>
<body>
    <h1>Informations</h1>
    <form method="GET" action="">
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="age">Âge:</label>
        <input type="text" id="age" name="age"><br><br>
        <input type="submit" value="Envoyer">
        <p> Flag= false <!-- Maybe you can pass it to True via a request ;) --></p>
    </form>

    <?php
    // Vérifie si des données ont été soumises via la méthode GET
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET['name'])) {
            $name = $_GET['name'];
            echo "<p>Nom: $name</p>";
        }

        if (isset($_GET['age'])) {
            $age = $_GET['age'];
            echo "<p>Âge: $age</p>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['name'])) {
            $name = $_POST['name'];
            echo "<p>Nom: $name</p>";
        }

        if (isset($_POST['age'])) {
            $age = $_POST['age'];
            echo "<p>Âge: $age</p>";
        }

        if (isset($_POST['Flag'])) {
            $flag = $_POST['Flag'];
            echo $flag;
            if ($flag == "true") {
                echo "<p>Affichage flag = $flag</p>";
                echo "<p>le flag est EPI{error404badrequest}</p>";

            }
        }
    }
    ?>
</body>
</html>
