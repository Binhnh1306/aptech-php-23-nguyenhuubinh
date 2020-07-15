<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<body>
    <div class="align-items-center text-center">

        <h1>Sửa Thông Tin Người Dùng</h1>
        <form action="/users/{{$user->id}}" method="POST">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div>
                <label for="name">Ten</label>
                <input type="text" name="name" id="name" value="{{$user->Name}}">
            </div>
            <br>
            <div>
                <label for="email">Thu Dien Tu</label>
                <input type="email" name="email" id="email" value="{{$user->Email}}" >
            </div>
            <br>
            <div>
                <label for="password">Mat Khau</label>
                <input type="password" name="password" id="password" value="{{$user->password}}">
            </div>
            <br>
            <button type="submit" class="btn btn-sm btn-success rounded-0">Sửa</button>
        </form>
    </div>
</body>

</html>