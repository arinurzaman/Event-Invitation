    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Bootstrap CSS File -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        <title>The Event | Admin | Attendance</title>
    </head>

    <body>

        <div class="d-flex align-items-center justify-content-center" style="height: 600px">

            <h2 class="me-5">Attendance in Venue</h2>
            <form action="{{ 'attending' }}" method="post">
                @csrf
                <div class="mb-3">
                    <label>QR Code</label>
                    <input type="text" class="form-control" name="qrcode" id="qrcode" onkeyup="isi_otomatis()">
                </div>
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" id="name" readonly>
                </div>
                <div class="mb-3">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email" id="email" readonly>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </form>

        </div>

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
                });
            }
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    </body>

    </html>
