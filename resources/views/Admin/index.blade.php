<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin - Dashboard</title>

    <link rel="shortcut icon" type="image/x-icon" href="adminassets/img/favicon.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="adminassets/css/font-awesome.min.css">

    <link rel="stylesheet" href="adminassets/css/feathericon.min.css">

    <link rel="stylesheet" href="adminassets/plugins/morris/morris.css">

    <link rel="stylesheet" href="adminassets/css/style.css">
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

            <a href="javascript:void(0);" id="toggle_btn"><i class="fe fe-text-align-left"></i></a>


            <a class="mobile_btn" id="mobile_btn"><i class="fa fa-bars"></i></a>




        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                        </li>
                        <li class="active">
                            <a href="{{ '/dashboard' }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                        </li>
                        <hr>
                        <li>
                            <a href="{{ '/attending' }}" target="_blank"><i class="fe fe-user-plus"></i>
                                <span>Confirmation Attendance</span></a>
                        </li>
                        <hr>
                        <li>
                            <a href="{{ '/clients' }}"><i class="fe fe-user"></i> <span>Clients</span></a>
                        </li>
                        <li>
                            <a href="{{ '/registrants-before-events' }}"><i class="fe fe-users"></i>
                                <span>Registrants</span></a>
                        </li>
                        <li>
                            <a href="{{ '/registrants-at-venue' }}"><i class="fe fe-check"></i> <span>Come to
                                    Event</span></a>
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
                    <div class="col-xl-4 col-sm-4 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon bg-primary">
                                        <i class="fe fe-users"></i>
                                    </span>
                                    <div class="dash-count">
                                        <a href="#" class="count-title" style="font-size: 10pt">Registrants before
                                            event</a>
                                        <a href="#" class="count"
                                            style="color: purple">{{ $jml_registrasi_before }}
                                            <small
                                                style="text-transform: none; font-size:10pt; color:dimgray">Participants</small>
                                        </a>

                                        <div class="d-flex">
                                            <a href="{{ '/registrants-before-events' }}" class="ms-auto">
                                                <button type="button" class="btn btn-success mt-3"><i
                                                        class="fe fe-eye"></i> View List</button>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-4 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon bg-info">
                                        <i class="fe fe-users"></i>
                                    </span>
                                    <div class="dash-count">
                                        <a href="#" class="count-title" style="font-size: 10pt">Event Clients</a>
                                        <a href="#" class="count"
                                            style="color:dodgerblue">{{ $jml_registrasi_client }}
                                            <small
                                                style="text-transform: none; font-size:10pt; color:dimgray">Participants</small>
                                        </a>

                                        <div class="d-flex">
                                            <a href="{{ '/clients' }}" class="ms-auto">
                                                <button type="button" class="btn btn-success mt-3"><i
                                                        class="fe fe-eye"></i> View List</button>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-4 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon bg-warning">
                                        <i class="fe fe-check"></i>
                                    </span>
                                    <div class="dash-count">
                                        <a href="#" class="count-title" style="font-size: 10pt">Come to
                                            event</a>
                                        <a href="#" class="count" style="color:orange">
                                            {{ $jml_registrasi_after }}
                                            <small
                                                style="text-transform: none; font-size:10pt; color:dimgray">Participants</small>
                                        </a>
                                        <div class="d-flex">
                                            <a href="{{ '/registrants-at-venue' }}" class="ms-auto">
                                                <button type="button" class="btn btn-success mt-3"><i
                                                        class="fe fe-eye"></i> View List</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script src="adminassets/js/jquery-3.6.0.min.js"></script>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

                    <script src="adminassets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

                    <script src="adminassets/js/script.js"></script>
</body>

</html>
