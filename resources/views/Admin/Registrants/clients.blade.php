<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Registrants - Clients</title>

    <link rel="shortcut icon" type="image/x-icon" href="adminassets/img/favicon.png">
    <link rel="stylesheet" href="adminassets/css/bootstrap.min.css">
    <link rel="stylesheet" href="adminassets/css/font-awesome.min.css">
    <link rel="stylesheet" href="adminassets/css/feathericon.min.css">
    <link rel="stylesheet" href="adminassets/plugins/morris/morris.css">
    <link rel="stylesheet" href="adminassets/plugins/datatables/datatables.min.css">
    <link rel="stylesheet" href="adminassets/css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

</head>

<body>

    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="{{ '/dashboard' }}" class="logo">
                    <img src="adminassets/img/logo-1.png" alt="Logo">
                </a>
                <a href="{{ '/dashboard' }}" class="logo logo-small">
                    <img src="adminassets/img/logo-small.png" alt="Logo" width="30" height="30">
                </a>
            </div>

            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fe fe-text-align-left"></i>
            </a>

            <a class="mobile_btn" id="mobile_btn">
                <i class="fa fa-bars"></i>
            </a>

        </div>

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                        </li>
                        <li>
                            <a href="{{ '/dashboard' }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                        </li>
                        <hr>
                        <li>
                            <a href="{{ '/attending' }}" target="_blank"><i class="fe fe-user-plus"></i>
                                <span>Confirmation Attendance</span></a>
                        </li>
                        <hr>
                        <li class="active">
                            <a href="{{ ('/clients') }}"><i class="fe fe-user"></i> <span>Clients</span></a>
                        </li>
                        <li>
                            <a href="{{ '/registrants-before-events' }}"><i class="fe fe-users"></i>
                                <span>Registrants</span></a>
                        </li>
                        <li>
                            <a href="{{ '/registrants-at-venue' }}"><i class="fe fe-check"></i> <span>Come to Event</span></a>
                        </li>
                        <hr>
                        <li>
                            <a href="{{ '/logout' }}"><i class="fe fe-logout"></i> <span>Logout</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Registrants Clients</h4>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <a href="" class="ms-start mb-3" style="color: black">
                                        Total : <b>{{ $jml_registrasi_client }} </b> result(s)
                                        <button type="button" class="btn btn-info"> <i class="fe fe-sync"></i>
                                        </button>
                                    </a>
                                    <a href="{{ '/clients-export' }}" class="ms-auto">
                                        <button type="button" class="btn btn-success"><i class="fe fe-download"></i>
                                            Export Excel</button>
                                    </a>
                                </div>
                                <div class="table-responsive">
                                    <table class="datatable display" id="dt">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Company</th>
                                                <th>Registered at</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data_client as $data)
                                                <tr>
                                                    <td>{{ $data->name }}</td>
                                                    <td>{{ $data->email }}</td>
                                                    <td>{{ $data->company }}</td>
                                                    <td>{{ $data->created_at }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#dt').DataTable({
                "searching": true,
            });
        });
    </script>

    <script src="adminassets/js/jquery-3.6.0.min.js"></script>
    <script src="adminassets/js/bootstrap.bundle.min.js"></script>
    <script src="adminassets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="adminassets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="adminassets/plugins/datatables/datatables.min.js"></script>
    <script src="adminassets/js/script.js"></script>

</body>
</html>
