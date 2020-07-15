<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<H1 class="text-success text-center">Bảng Thông Tin Người Dùng</H1>

<form action="/users/create" method="PATCH"> 

    <button class="btn btn-sm btn-warning rounded-0">
        Tạo người dùng mới
    </button>
</form>
<table class="table table-bordered ">
    <thead class="thead-dark">

        <th> ID</th>
        <th>Name</th>
        <th>Email</th>
        <th class="text-center">Action</th>

    </thead>
    @foreach($users as $user)

    <tbody>
        <td>{{$user->id}}</td>
        <td>{{$user->Name}}</td>
        <td>{{$user->Email}}</td>
        <td>
            <div class="d-flex justify-content-between pr-5 pl-5 w-75">
                <div>
                    <form action="/users/{{$user->id}}">

                        <button class="btn btn-sm btn-success rounded-0">
                            Show
                        </button>
                    </form>
                </div>
                <div>
                    <form action="/users/{{$user->id}}/edit">

                        <button class="btn btn-sm btn-warning rounded-0">
                            Edit
                        </button>
                    </form>
                </div>
                <div>
                    <form action="users/{{$user->id}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="_method" value="delete">
                        <button class="btn btn-sm btn-danger rounded-0">
                            Delete
                        </button>
                    </form>
                </div>

            </div>
        </td>
    </tbody>




    <!-- 
        <h1>Ten nguoi dung:
            <a href="users/{{$user->id}}">{{$user->Name}}</a>
        </h1>
    </div>
    
</div> -->
    @endforeach
</table>
