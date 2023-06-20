<!DOCTYPE html>
<html lang="en">

<head>
    <title>Confirmation attendance</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="adminassets/img/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="attendingassets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="attendingassets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="attendingassets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="attendingassets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="attendingassets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="attendingassets/css/util.css">
    <link rel="stylesheet" type="text/css" href="attendingassets/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="attendingassets/images/img-01.png" alt="IMG">
                </div>

                <form action="{{ 'attending' }}" method="POST" class="login100-form validate-form">
                    <span class="login100-form-title">
                        Attendance in Venue
                    </span>
                    @csrf
                    <div class="wrap-input100">
                        <input class="input100" type="text" id="qrcode" name="qrcode" placeholder="QR Code"
                            oninput="isi_otomatis()">
                        {{-- <span class="focus-input100"></span> --}}
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100">
                        <input class="input100" type="text" name="name" id="name" placeholder="Name">
                        {{-- <span class="focus-input100"></span> --}}
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100">
                        <input class="input100" type="text" name="email" id="email" placeholder="Email">
                        {{-- <span class="focus-input100"></span> --}}
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Submit
                        </button>
                    </div>

                    {{-- <div class="container-add100-form-btn">
                        <button type="button" data-toggle="modal" data-target="#modalRegisterForm"
                            class="add100-form-btn">
                            Add Manually
                        </button>
                    </div> --}}

                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                </form>
            </div>
        </div>
    </div>

    {{-- <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">The Event 2023</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <form action="">
                        <div class="md-form mb-5 mt-5">
                            <input type="text" placeholder="Name" name="name" class="form-control">
                        </div>
                        <div class="md-form mb-5">
                            <input type="email" placeholder="Email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-outline btn-info">Submit</button>
                    </div>
                    </form>
            </div>
        </div>
    </div> --}}

  
    <!--===============================================================================================-->
    <script src="attendingassets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="attendingassets/vendor/bootstrap/js/popper.js"></script>
    <script src="attendingassets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="attendingassets/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="attendingassets/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>

    <script type="text/javascript">
        function isi_otomatis() {
            var qrcode = $("#qrcode").val();
            $.ajax({
                url: 'ajax.php',
                data: "qrcode=" + qrcode,
            }).success(function(data) {
                var json = data,
                    obj = JSON.parse(json);
                $('#qrcode').val(obj.qrcode);
                $('#name').val(obj.name);
                $('#email').val(obj.email);
                // $('#jurusan').val(obj.jurusan);
            });
        }
    </script>
    <!--===============================================================================================-->
    <script src="attendingassets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
