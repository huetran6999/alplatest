<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
    <script src="js/api.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <h3 class="mt-5 text-center">Danh sách User</h3>
        <a href="{{route('create_user')}}" class="btn btn-success btn-add mb-2" style="float: left">Thêm mới</a> <br>
        <div class="mt-5">
            @if (Session::has('message'))
            <div class="alert alert-success">
                <strong>{{Session::get('message')}}</strong>
            </div>
            @endif

            @if (Session::has('del-success'))
            <div class="alert alert-success">
                <strong>{{Session::get('del-success')}}</strong>
            </div>
            @endif

            @if (Session::has('fail'))
            <div class="alert alert-danger">
                <strong>{{Session::get('fail')}}</strong>
            </div>
            @endif
        </div>
        <table class="table table-hover" id="user-list">
            <thead>
                <th>ID</th>
                <th>Họ và tên</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Hành động</th>
            </thead>
            <tbody id="user-list">
                {{-- @foreach ($users as $user)
                <tr>
                    <td>{{$loop-> index + 1 }}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->address}}</td>
                    <td><a href="{{ route('delete',$user->id) }}" class="btn btn-danger btn-delete btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xoá người dùng {{$user->username}} không?')">Xoá</a></td>
                </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
      
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>