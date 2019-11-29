<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>login</title>
</head>
<body>
<section class="login d-flex justify-content-center align-items-center w-75 m-auto">
    <div class="container" style="margin-top: 10%;">
        <div class="row">
            <div class="col-sm-5 col-md-4 ph">
                <img src="{{ asset('img/admins.jpeg') }}" class="img-responsive img-fluid mx-auto d-block" width="100%;" alt="not found">
            </div>
            <div class="col-sm-7 col-md-8 log">
                <h4 class="text-center">@lang('site.dashboardlogin')</h4> <hr class="ln">
                <form action="{{route('dashboard.login_enter')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-element">
                        <input type="email" class="form-control" name="email" placeholder="أدخل الإيـميـل" autocomplete="on"/>
                    </div>
                    <br>
                    <div class="form-element">
                        <input type="password" class="form-control" name="password" placeholder="أدخل الرقم السري" autocomplete="on"/>
                    </div>
                    <button type="submit" class="btn btn-outline-success mt-5 w-50 " style="display: block; margin: auto">تسجيـل الدخـول</button>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
