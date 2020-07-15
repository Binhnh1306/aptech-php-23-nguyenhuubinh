<!-- <a href="/users">Quay Lai Trang Chu</a> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<button> <a href="/users">Quay Lai Trang Chu</a></button>
<br>
<br>
<!-- {{$user->Name}} -->
<table class="table table-bordered table-dark">
<thead class="th-dark">
<tr>
<td>ID</td>
<td>Name</td>
<td>Email</td>
<td>Password</td>
<td>Created at</td>
<td>Updated at</td>
</tr>
</thead>
<tbody>
<tr>
<td>{{$user->id}}</td>
<td>{{$user->Name}}</td>
<td>{{$user->Email}}</td>
<td>{{$user->password}}</td>
<td>{{$user->created_at}}</td>
<td>{{$user->updated_at}}</td>
</tr>
</tbody>
</table>