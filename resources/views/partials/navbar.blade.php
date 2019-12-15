<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/" style="color:#777">GEDEPE</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( true || Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('catalog') && ! Request::is('catalog/create')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/shop')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Tiendas
                        </a>
                    </li>
                    @if( Auth::check() )
                    @if( Auth::user()->role_id == 1 )
                    <li class="nav-item {{  Request::is('catalog/create') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/listUsers')}}">
                            Lista de Usuarios
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('catalog/create') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/createShop')}}">
                            <span>&#10010</span> Nueva tienda
                        </a>
                    </li>
                    @endif
                    @if( Auth::user()->role_id == 1 || Auth::user()->role_id == 2 )
                    <li class="nav-item {{  Request::is('catalog/create') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/createProduct')}}">
                            <span>&#10010</span> Nueva producto
                        </a>
                    </li>

                    <li class="nav-item {{  Request::is('catalog/create') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/allReserve')}}">
                            Reservas
                        </a>
                    </li>
                    @endif
                    @if( Auth::user()->role_id == 3 )
                    <li class="nav-item {{  Request::is('catalog/create') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/allReserveUser/' .Auth::user()->id)}}">
                            Reservas
                        </a>
                    </li>
                    @endif
                   @endif 
                </ul>

                @if( !Auth::check() )
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/login') }}" method="GET">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Iniciar Sesión
                            </button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <form action="{{ url('/register') }}" method="GET">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Registrate
                            </button>
                        </form>
                    </li>
                </ul>
                
                @endif               
                @if( Auth::check() )
                @if( Auth::user()->role_id == 3 )
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/list/' . Auth::user()->id) }}" method="GET" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                            <img src="https://img.icons8.com/wired/30/000000/shopping-cart-loaded.png">
                            </button>
                        </form>
                    </li>
                </ul>
                @endif
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/listUsers/' .Auth::user()->id) }}" method="GET" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                            <img src="https://img.icons8.com/wired/30/000000/circled-user.png">
                            </button>
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
                @endif 
            </div>
        @endif
    </div>
</nav>
