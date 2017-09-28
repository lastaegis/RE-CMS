<html>
    <header>
        <title>
            RE-CMS
        </title>

        <!-- Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- CSS -->
        
        <link href="{{ URL::asset('public/assets/backend.css') }}" rel="stylesheet">
        
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </header>
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <a href="#" class="logo" style="background-color: #D10F5B;">
                <center>
                    <span class="logo-mini"><b>K</b></span>
                    <span class="logo-lg"></span>
                </center>
            </a>
            <nav class="navbar navbar-static-top" style="background-color: #EC2070;">
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-users"></i>
                                <span class="hidden-xs">Hai, Admin</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header" style="height: 20%;">
                                    <p></p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ URL('admin/auth/signin') }}" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu">
                    @yield("menu")
                </ul>
            </section>
        </aside>
        <div class="content-wrapper">
            @yield("content")
        </div>
    </div>
    </body>
    <footer>
        <script src="{{ URL::asset('resources/assets/plugins/backend/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
        
        <script src="{{ URL::asset('public/assets/backend.js') }}" type="text/javascript"></script>
        
    </footer>
</html>