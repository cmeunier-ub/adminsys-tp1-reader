<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>LMDCorp - Statistics</title>
</head>
<body>
    <h1>Analyse des connexions</h1>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Nombre de connexions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once("display_connections.php");
            ?>
        </tbody>
    </table>
</body>
</html>