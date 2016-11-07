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
    <link href="{{url('css/app_.css')}}" rel="stylesheet">
    <link href="{{url('css/menu-colections.css')}}" rel="stylesheet">

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
        <header class="">

            <!-- Links no topo da tela-->
            <div class="top_bar row">
                <div class="">
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
            </div>
            <!--FIm Links no topo da tela-->

            <nav class="navbar navbar-default row">
                 
                <!--LOGO MARCA-->
                <div class="navbar-header col-md-2">  
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img id="logo"class="img-responsive" src="{{url('img/logo2.png')}}">
                    </a>
                </div>
                <!--FIM LOGO MARCA-->

                <div class="col-md-10">

                    <!--barra de busca-->
                    <div class="col-md-12"> 
                        <div id="barra-busca" class="input-group">
                            <div class="input-group-btn search-panel">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <span id="search_concept">Filtrar por</span> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                <li><a href="#contains">Categoria</a></li>
                                <li><a href="#its_equal">Nome</a></li>
                                <li><a href="#greather_than">Código</a></li>
                                <li class="divider"></li>
                                <li><a href="#all">Tudo</a></li>
                                </ul>
                            </div>
                            <input type="hidden" name="search_param" value="all" id="search_param">         
                            <input type="text" class="form-control" name="x" placeholder="Buscar ...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                            </span>
                        </div>
                    </div>
                    <!--FIM barra de busca-->

                    <div class="col-md-12"> 
                    
                        <div class="collapse navbar-collapse js-navbar-collapse">
                        <ul id="menu" class="nav navbar-nav">

                            <li class="dropdown mega-dropdown">

                                <a href="#" id="colecoes" class="dropdown-toggle" data-toggle="dropdown">Coleções <span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
                                <ul class="dropdown-menu mega-dropdown-menu row">
                                    
                                    <!--NOVIDADES-->
                                    <li class="col-sm-2"> 
                                        <ul>
                                            
                                            <li class="dropdown-header">Novidades</li>
                                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                                        <h4><small>Item 1</small></h4>
                                                        <button class="btn btn-primary" type="button">49,99 R$</button>
                                                    <!--<button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button> -->
                                                    </div>
                                                        <!-- End Item -->
                                                    <div class="item">
                                                        <a href="#"><img src="http://placehold.it/254x150/ef5e55/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                                        <h4><small>Item 2</small></h4>
                                                        <button class="btn btn-primary" type="button">9,99 R$</button>
                                                        <!--<button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button> -->
                                                    </div>
                                                        <!-- End Item -->
                                                    <div class="item">
                                                        <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                                        <h4><small>Item 3</small></h4>
                                                        <button class="btn btn-primary" type="button">49,99 R$</button>
                                                    <!-- <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button> -->
                                                    </div>
                                                    
                                                    <!-- End Item -->
                                                </div><!-- End Carousel Inner -->
                                            </div>
                                            <!-- /.carousel -->
                                            <li class="divider"></li> 
                                             <form class="form" role="form">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="email">Endereço de Email</label>
                                                        <input type="email" class="form-control" id="email" placeholder="Digite seu email">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-block">Assine</button>
                                                </form>
                                            <li class="divider"></li>
                                            <li><a href="#">Todas as Categorias<span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                                            <!-- /.carousel -->
                                        </ul>
                                    </li>
                                    <!--NOVIDADES-->
                        
                                    <?php $counter = 0 ?> 
                               
                                    @if(isset($grupos) )
                                        @foreach($grupos as $index => $grupo)

                                            @if($index == 0 || $index % 2 == 0)
                                            <li class="col-sm-2 {{ $index}}">
                                                <ul>
                                            @endif
                                                    <li class="dropdown-header">{{$grupo->nome}}</li>
                                                    <?php $counter = $counter + 1 ?>
                                            @if( $counter > 0 && $counter % 2 == 0)
                                                </ul>
                                            </li>  
                                            <?php $counter = 0 ?>
                                            @endif

                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                        </ul>
                        <!-- Menu -->
                        <ul class="nav navbar-nav navbar-right" id="menu-direito"> 
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/contato') }}">Contato</a></li>

                            @if(auth()->guest())
                                @if(!Request::is('auth/login'))
                                    <li><a href="{{ url('/auth/login') }}">Login</a></li>
                                @endif
                                @if(!Request::is('auth/register'))
                                    <li><a href="{{ url('/auth/register') }}">Register</a></li>
                                @endif
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"  role="button" aria-expanded="false">{{ auth()->user()->name }}<span class="caret"></span></a>
                                    <ul class="dropdown-menu ">
                                        <li>
                                            @if(!auth()->guest() && auth()->user()->isAdmin)
                                            <a href="{{ url('/admin') }}" class="alert-link">Painel administrativo</a>
                                            @endif
                                            <a href="{{ url('auth/logout')}}">Sair</a>
                                        </li>

                                       

                                    </ul>
                                </li>
                            @endif
                        </ul>
                        <!-- Fim Menu -->
                        
                        </div>
                        <!-- /.nav-collapse -->

                    </div>
                </div> 
            </nav>
           
        </header>

        <!-- Page Content -->
        <main class="container-fluid" >
            <div class="row">
                    @yield('content')
            </div>
        </main>
        
        <div class="container">   <!-- Footer -->

            <footer class="footer p-t-1">
                <div class="container">
                    <div class="pull-right">
                        <nav class="navbar" style="background:transparent; color: black;">
                            <nav class="nav navbar-nav pull-xs-left">
                                <a class="nav-item nav-link" href="#">Home</a>
                                <a class="nav-item nav-link" href="#">About</a>
                                <a class="nav-item nav-link" href="#">Download App</a>
                                <a class="nav-item nav-link" href="#">Help</a>
                            </nav>
                        </nav>
                    </div>

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
