<?php
require_once("config.php");

$sql = "select * from crud";
$result = ($conn->query($sql));
if ($result) {
    $rows = $result->fetch_all(MYSQLI_ASSOC);
}

?>

<?php
$sno = 0;
if (!empty($rows))
    foreach ($rows as $row) {
?>
    <tr>

        <td><?php echo ++$sno; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><span class="btn btn-success edit" data-id="<?= $row['id'] ?>">Edit</span></td>
        <td><span class="btn btn-danger delete" data-id="<?= $row['id'] ?>">Delete</span></td>

    </tr>
<?php } ?>