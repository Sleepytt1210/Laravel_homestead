<header class="header">
    <div class="container bg-light d-flex justify-content-between align-items-center">
        <div class="d-flex">
            <a class="logo btn py-0 px-2" href="{{ route('index') }}">Laravel</a>
            <form class="form-inline my-2 my-lg-0 ml-3">
                <input class="form-control form-control-sm" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-sm btn-outline-light ml-2 px-4" type="submit">Search</button>
            </form>
        </div>
        <div class="right-btn">
            @auth
            <a href="{{ route('user.info') }}" class="text-decoration-none text-white mr-3 ">
                <img width="30" height="30" src="{{ asset('img/avatar_placeholder_400x400.jpg') }}" class="mr-2 rounded-circle" alt="">
                <span>{{ auth()->user()->name }}</span>
            </a>
            <form method="POST" action="{{ route('logout') }}" class="d-inline" id="logout">
                @csrf
                <a href="javascript:;" onclick="document.getElementById('logout').submit()" class="text-decoration-none text-white">Logout</a>
            </form>
            @else
                <div class="right-btn">
                    <a href="{{ route('login') }}" class="btn btn-sm btn-primary">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-sm btn-outline-light ml-2">Register</a>
                </div>
            @endauth
        </div>
    </div>
</header>
