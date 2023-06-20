<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin - Login</title>

    <link rel="shortcut icon" type="image/x-icon" href="adminassets/img/favicon.png">

    <link rel="stylesheet" href="adminassets/css/bootstrap.min.css">

    <link rel="stylesheet" href="adminassets/css/font-awesome.min.css">

    <link rel="stylesheet" href="adminassets/css/feathericon.min.css">

    <link rel="stylesheet" href="adminassets/plugins/morris/morris.css">

    <link rel="stylesheet" href="adminassets/css/style.css">
</head>

<body>

    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Login</h1>
                            <p class="account-subtitle">Access to dashboard</p>

                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            @if (session()->has('loginError'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('loginError') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <form action="{{ '/login' }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input class="form-control" name="email" type="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="password" type="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="adminassets/js/jquery-3.6.0.min.js"></script>
    <script src="adminassets/js/bootstrap.bundle.min.js"></script>
    <script src="adminassets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="adminassets/js/script.js"></script>

</body>

</html>
