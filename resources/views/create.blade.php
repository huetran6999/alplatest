<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Create User</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <h3 class="mt-2 text-center">Tạo người dùng</h3>
            <div class="card-body">
                <form action="{{url('create')}}" method="post">
                    @csrf
                    <label class="form-label mt-2">Họ và tên</label>
                    <input type="text" class="form-control" name="username" required/>
                    <label class="form-label">Số điện thoại đăng nhập</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">+84</div>
                        </div>
                        <input type="text" class="form-control" name="phone" required>   
                    </div>
                    <span class="text-danger">@error('phone'){{$message}}@enderror</span> <br>
                    <label class="form-label mt-2">Địa chỉ</label>
                    <input type="text" class="form-control" name="address" required/>
                    <label class="form-label mt-2">Mật khẩu</label>
                    <input type="password" class="form-control" name="password" required/>

                    <div class=" text-center mt-2">
                        <button class="btn btn-primary" type="submit">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>