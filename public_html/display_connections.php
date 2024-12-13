<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("./../config.php");

$db = new PDO("mysql:host=$DB_HOST:$DB_PORT;dbname=$DB_NAME", $DB_USER, $DB_PASS);

$statement = $db->prepare("SELECT * FROM connections;");
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $row)
{
    ?>
    <tr>
        <td><?php echo $row["date"]; ?></td>
        <td><?php echo $row["number"]; ?></td>
    </tr>
    <?php
}