<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!-- CSS only -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<!-- <style>
th,
td {
    border: solid 1px black;
    padding: 8px;
}

table {
    border-collapse: collapse;
}
</style> -->

<body class="m-5">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_23_10";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, Name, Email,password FROM $dbname.users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {?>
  <table class="table table-bordered">
  <thead class="thead-dark">
  <tr>
  <th scope="col"><?php echo "Id" ?></th>
  <th scope="col"><?php echo "Name" ?></th>
  <th scope="col"><?php echo "Email" ?></th>
  <th scope="col"><?php echo "Password" ?></th>
  <th scope="col" class=""><?php echo "Action" ?></th>
  </tr></thead>
  
  <?php
  // output data of each row
  while($row = $result->fetch_assoc()) {?>
     <!-- echo "id: " . $row["id"]. " ---- Name: " . $row["firstname"]. " ---------- email: " . $row["email"]. "<br>"; -->


 <tbody class="table-striped" >
 <tr>
<th scope="row"> <?php echo $row["id"];?></th>
<td> <?php echo $row["Name"]; ?></td>
<td> <?php echo $row["Email"]; ?></td>
<td> <?php echo $row["password"]; ?></td>
<td class="d-flex align-items-center justify-content-around">
              <form action="{{route('users.show',$user->id)}}" method="get">
                <button class="btn btn-sm btn-primary rounded-0">
                  Show
                </button>
              </form>
              <form action="{{route('users.edit',$user->id)}}" method="get">
                <button class="btn btn-sm btn-warning rounded-0">
                  Edit
                </button>
              </form>
              <form action="{{route('users.destroy',$user->id)}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="delete">
                <button class="btn btn-sm btn-danger rounded-0">
                  Delete
                </button>
              </form>
            </td>
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




