<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
th,
td {
    border: solid 1px black;
    padding: 8px;
}

table {
    border-collapse: collapse;
}
</style>

<body>
    <?php
$tensp=["nokia","samsung", "iphone"];
$giasp=[1200000,2400000,3600000];
$xuatxu=["China","Korea","America"];


?>
    <table>
        <thead>
            <tr>
                <th><?php echo "STT"?></th>
                <th><?php echo "Ten"?></th>
                <th><?php echo "Gia"?></th>
                <th><?php echo "Xuat Xu"?></th>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 0; $i < count($tensp); $i++) {?>
            <tr>
                <td><?php echo ($i + 1);?></td>
                <td><?php echo $tensp[$i];?></td>
                <td><?php echo $giasp[$i];?></td>
                <td><?php echo $xuatxu[$i];?></td>
            </tr>

            <?php } ?>
        </tbody>
    </table>
</body>

</html>