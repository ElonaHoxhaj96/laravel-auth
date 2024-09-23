<header>
    <div class="container-fluid text-bg-dark d-flex justify-content-between px-5">
        <div>
            <a href="{{route('home')}}" target="_blank"> Vai sul sito
        </div>
        <div>
        <ul class="navbar">
            @guest
            <li class="nav-item"><a href="{{route('login')}}"></a>Login</li>
            <li class="nav-item"><a href="{{route('register')}}"></a>Registrati</li>
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
            </li>
            <li class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('admin.home')}}">Admin</a>
                <a class="dropdown-item" href="{{ route('logout')}}">Logout</a>
            </li>
            @endguest
        </ul>
    </div>
    </div>
    
</header>