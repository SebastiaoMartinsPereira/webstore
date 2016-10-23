<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Newprog Softwares">
    <meta name="author" content="Newprog Softwares">

    <title>Shop Homepage</title
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap Core CSS -->
    <!-- Custom CSS -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/bs_adpter.css')}}" rel="stylesheet">
    <link href="{{url('css/menu-colections.css')}}" rel="stylesheet">
    <link href="{{url('css/admin.css')}}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Pathway+Gothic+One|Poiret+One" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- 
    Styles
    <link href="/css/app.css" rel="stylesheet"> 
    -->
    
    @yield('_head')
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

<div class="container-fluid">
    <header>
        <div class="top_bar">        
            <div class="col-md-6">
                <ul class="social">
                    <li><a target="_blank" href="#"><i class="fa fa-facebook text-white"></i></a></li>
                    <li><a target="_blank" href="#"><i class="fa fa-twitter text-white"></i></a></li>
                    <li><a target="_blank" href="#"><i class="fa fa-instagram text-white"></i></a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="rightc">
                    <li><i class="fa fa-envelope-o"></i> newprogsoftwares@gmail.com  </li>  
                </ul>
            </div>
        </div>
        <!--top_bar-->
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img id="logo"class="img-responsive" src="{{url('img/logo.png')}}">
                </a>
            </div>
            
            <div>
                <ul class="nav navbar-nav navbar-right" id="menu-direito"> 
                    @if(!auth()->guest())
                       <!-- @if(!Request::is('auth/login'))
                        @endif
                        @if(!Request::is('auth/register'))
                        @endif-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"  role="button" aria-expanded="false">{{ auth()->user()->name }}<span class="caret"></span></a>
                            <ul class="dropdown-menu login-dropdown-menu row">
                                <li class="col-sm-3">
                                    <a href="{{ url('/auth/logout')}}">Sair</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>                   
            </div>
            <!-- /.nav-collapse -->
        </nav>
        <div class="website col-md-2 pull-right">
            @if(!auth()->guest())
                @if(auth()->user()->isAdmin)
                    <div class="alert alert-success" role ="alert">
                          <a href="{{ url('/') }}" class="alert-link">Web Site &nbsp&nbsp<i class="fa fa-globe" aria-hidden="true"></i>&nbsp</span></a>
                    </div>
                @endif       
            @endif
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="{{ url('/admin') }}"><i class="fa fa-home fa-fw"></i>Home</a></li>
                    <li><a href="{{ url('/admin/banner') }}"><i class="fa fa-list-alt fa-fw"></i>Banners</a></li>
    <!--            
                    <li><a href="#"><i class="fa fa-file-o fa-fw"></i>Pages</a></li>
                    <li><a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Charts</a></li>
                    <li><a href="#"><i class="fa fa-table fa-fw"></i>Table</a></li>
                    <li><a href="#"><i class="fa fa-tasks fa-fw"></i>Forms</a></li>
                    <li><a href="#"><i class="fa fa-calendar fa-fw"></i>Calender</a></li>
                    <li><a href="#"><i class="fa fa-book fa-fw"></i>Library</a></li>
                    <li><a href="#"><i class="fa fa-pencil fa-fw"></i>Applications</a></li>
    -->
                    <li><a href="#"><i class="fa fa-cogs fa-fw"></i>Configurações</a></li>
                </ul>
            </div>
            <div class="col-md-9" ng-view>
               @yield('content')
              
            </div>
        </div>
    </div>
    
    <div class="container"> 
        <!-- Footer -->
        <footer class="footer p-t-1">
            <div class="container">
                <a href="https://www.facebook.com/NewprogSoftwares"><i class="fa fa-facebook-official fa-2x"></i></a>
                <a href="#"><i class="fa fa-pinterest-p fa-2x"></i></a>
                <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                <a href="#"><i class="fa fa-flickr fa-2x"></i></a>
                <a href="https://br.linkedin.com/in/sebastião-martins-pereira-37313986"><i class="fa fa-linkedin fa-2x"></i></a>
                <p class="h6">
                    Copyright &copy; Newprog Softwares {{ config('app._year', '2016') }}
                    <a href="https://www.facebook.com/NewprogSoftwares" target="_blank"></a>
                    @yield('_rodape')
                </p>
            </div>
        </footer>
    </div>
</div>
    <!-- /.container -->
   

    <!-- jQuery -->
    <script src="{{url('js/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('js/bootstrap.min.js')}}"></script>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="{{url('js/app_.js')}}"></script>
    <script src="{{url('js/app.js')}}"></script>
</body>
</html>
