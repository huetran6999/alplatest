<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Login Page</title>
</head>
<body>
    <div class="container   col-12 col-md-8 col-lg-6" style="width: 100%">
        <div class="card mt-5">
            <div class="card-body">
                <div class="container mt-5">
                    @if (session('thongbao'))           
                        <div class="alert alert-danger" role="alert">
                            <strong>{{session('thongbao')}}</strong>
                        </div>             
                    @endif

                    <form method="POST" action="{{ url('/login') }}">
                        @csrf
                        <h3 class="mb-5  text-center">ĐĂNG NHẬP HỆ THỐNG</h3>
                        <label class="form-label">Số điện thoại đăng nhập</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">+84</div>
                            </div>
                            <input type="text" class="form-control" name="phone" required>
                        </div>

                        <label class="form-label mt-2">Mật khẩu</label>
                        <input type="password" class="form-control" name="password" required/>
                                                    
                        <div class=" text-center mt-2">
                            <button class="btn btn-primary" type="submit">Đăng nhập</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>