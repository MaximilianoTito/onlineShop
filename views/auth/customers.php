<?php include '../../shared/header.php'?>
<?php include '../../shared/navlogged.php'?>

<?php require '../../db/conn.php';
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
?>
<div class="p-4">
<table class="table table-hover table-success" >
    <thead>
        <tr>
            <th>Name</th>
            <th>Last name</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_array($result)) { ?>
        <tr>
            <td>
                <?php echo $row['name'] ?>
            </td>
            <td>
                <?php echo $row['lastname'] ?>
            </td>
            <td>
                <?php echo $row['mobile_phone'] ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>
<?php include '../../shared/footer.php'?>
