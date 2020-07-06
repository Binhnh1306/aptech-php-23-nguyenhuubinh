
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<table class="table table-bordered">
  <thead class="thead-dark">
  <tr>
  <th scope="col"><?php echo "Id" ?></th>
  <th scope="col"><?php echo "Name" ?></th>
  <th scope="col"><?php echo "Email" ?></th>
  <th scope="col"><?php echo "Password" ?></th>
  <th scope="col" class=""><?php echo "Action" ?></th>
  </tr>
  </thead>
  <tbody>
  @foreach($showusers as $user)
  <tr>
  <th scope="row">{{$user->id}} </th>
  <td>{{$user->Name}}</td>
  <td>{{$user->Email}}</td>
  <td>{{$user->password}}</td>
  </tr>
  @endforeach
 
  </tbody>
  </table>
