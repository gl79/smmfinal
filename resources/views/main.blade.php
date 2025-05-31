<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/plugins/switchery/switchery.css') }}" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- bagian include sidebar -->
        @include('template.sidebar')

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary" href="#">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm welcome-message">
                                <span class="badge bg-primary rounded-pill fs-30">Rp 100,000.00</span>
                            </span>
                        </li>
                        <!-- Pesan -->
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-envelope"></i> <span class="label label-warning">16</span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages">
                                <!-- Pesan dummy -->
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a class="dropdown-item float-left" href="#">
                                            <img alt="image" class="rounded-circle" src="{{ asset('img/a7.jpg') }}">
                                        </a>
                                        <div class="media-body">
                                            <small class="float-right">46h ago</small>
                                            <strong>Mike Loreipsum</strong> started following <strong>Monica
                                                Smith</strong>.
                                            <br>
                                            <small class="text-muted">3 days ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-divider"></li>
                                <!-- Lainnya... -->
                            </ul>
                        </li>
                        <!-- Notifikasi -->
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li>
                                    <a href="#">
                                        <div>
                                            <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                            <span class="float-right text-muted small">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <!-- Lainnya... -->
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>@yield('title')</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>@yield('breadcrumb')</strong>
                        </li>
                    </ol>
                </div>
            </div>

            <div class="wrapper wrapper-content animated fadeInRight">
                @yield('content')
            </div>

            @include('template.footer')

        </div>
    </div>

    <!-- JS -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/inspinia.js') }}"></script>
    <script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>


    <script src="{{ asset('js/plugins/dataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/dataTables/dataTables.bootstrap4.min.js') }}"></script>


    <!-- Switchery -->
    <script src="{{ asset('js/plugins/switchery/switchery.js') }}"></script>


    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
            $('.dataTables-example').DataTable({
                pageLength: 10,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [{
                        extend: 'copy'
                    },
                    {
                        extend: 'csv'
                    },
                    {
                        extend: 'excel',
                        title: 'ExampleFile'
                    },
                    {
                        extend: 'pdf',
                        title: 'ExampleFile'
                    },

                    {
                        extend: 'print',
                        customize: function(win) {
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });

            var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, {
                color: '#1AB394'
            });
            var elem = document.querySelector('.js-switch2');
            var switchery = new Switchery(elem, {
                color: '#1AB394'
            });
            var elem = document.querySelector('.js-switch3');
            var switchery = new Switchery(elem, {
                color: '#1AB394'
            });
            var elem = document.querySelector('.js-switch4');
            var switchery = new Switchery(elem, {
                color: '#1AB394'
            });
            var elem = document.querySelector('.js-switch5');
            var switchery = new Switchery(elem, {
                color: '#1AB394'
            });
        });
    </script>

</body>

</html>