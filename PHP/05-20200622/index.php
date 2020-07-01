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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, email FROM $dbname.users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {?>
<table>
<thead>
<tr>
<th><?php echo "Id" ?></th>
<th><?php echo "Name" ?></th>
<th><?php echo "Email" ?></th>
</tr></thead>

<?php
     while($row = mysqli_fetch_assoc($result)) {?>

     <!-- echo "id: " . $row["id"]. " ---- Name: " . $row["firstname"]. " ---------- email: " . $row["email"]. "<br>"; -->


 <tbody>
 <tr>
<td> <?php echo $row["id"];?></td>
<td> <?php echo $row["firstname"]; ?></td>
<td> <?php echo $row["email"]; ?></td>
</tr>
</tbody>

  <?php }
}
else {
  echo "0 results";
}

// mysqli_close($conn);
?>
</body>

</html>