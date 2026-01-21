<header>
    <div id="logo-titulo">
        <a href="{{route('index')}}"><img src="/img/escudoBlanco.jpg" alt="Escudo Notthingam Forest"></a>
        <div id="titulo">
            <h1>NOTTHINGAM FOREST</h1>
        </div>
        <div class="login-logout-singup">
            @auth
                <a href="{{route('logout')}}"><button>CERRAR SESIÓN</button></a>
            @else
                <a href="{{route('login')}}"><button>INICIAR SESIÓN</button></a>
                <a href="{{route('singup')}}"><button>REGISTRARSE</button></a>
            @endauth
        </div>

    </div>
    <nav>
        <a href={{route('index')}}>INICIO</a>
        <a href={{route('players.index')}}>JUGADORES</a>
        <a href={{route('events.index')}}>EVENTOS</a>
        <a href={{route('shop')}}>TIENDA</a>
        <a href={{route('messages.create')}}>CONTACTO</a>
        <a href={{route('whereAreWe')}}>DONDE ESTAMOS</a>
    </nav>
</header>

