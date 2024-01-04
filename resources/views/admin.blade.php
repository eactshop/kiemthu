<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body>
    <div style="margin-top: 150px" class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="mt-5">Login</h2>
                <form action="{{route('admin-home') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="username">Tài khoản:</label>
                        <input type="username" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button style="margin-top: 20px" type="submit" class="btn btn-primary">Đăng Nhập</button>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
