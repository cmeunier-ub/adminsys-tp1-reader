<?php
require_once("./../config.php");

$db = new PDO("mysql:host=$DB_HOST:$DB_PORT;dbname=$DB_NAME", $DB_USER, $DB_PASS);

$statement = $db->prepare("SELECT * FROM connections ORDER BY `date` ASC;");
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