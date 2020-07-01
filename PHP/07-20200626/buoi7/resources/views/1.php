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
$products = [
    [
        "Samsung S10",
        20000000,
        "Bac Ninh,Viet Nam"

    ],
    [
        "Iphone 11",
        28000000,
        "Quang Chau, China"

    ],
    [
        "RealmeRealme",
        118000000,
        "Bac Kinh, China"

    ],
    [
        "BPhone 4 pro",
        33000000,
        "Ha Noi, Viet Nam"

    ],
   
]
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
            <?php for($i = 0; $i < count($products); $i++) {?>
            <tr>
                <td><?php echo ($i+1); ?></td>
                <?php  for($n = 0; $n < count($products[$i]); $n++) {?>

                <td><?php echo $products[$i][$n];?></td>


                <?php } ?>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>