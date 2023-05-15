<header class="navigation">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light px-0">
            <a class="navbar-brand order-1 py-0" href="/">
                <img loading="prelaod" decoding="async" width="125px" height="100px" src="/logo.png"
                    alt="Reporter Hugo">
            </a>
            <div class="navbar-actions order-3 ml-0 ml-md-4">
                <button aria-label="navbar toggler" class="navbar-toggler border-0" type="button" data-toggle="collapse"
                    data-target="#navigation"> <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <form action="/" class="search order-lg-3 order-md-2 order-3 ml-auto">
                @if (request("category"))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request("user"))
                <input type="hidden" name="user" value="{{ request('user') }}">
                @endif
                <input id="search-query" name="search" value="{{ request('search') ?? '' }}" type="search"
                    placeholder="Search..." autocomplete="off">
            </form>
            <div class="collapse navbar-collapse text-center order-lg-2 order-4" id="navigation">
                <ul class="navbar-nav mx-auto mt-3 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Articles
                        </a>
                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Travel</a>
                            <a class="dropdown-item" href="#">Lifestyle</a>
                            <a class="dropdown-item" href="#">Cruises</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Account
                        </a>
                        <div class="dropdown-menu">
                            @guest
                            <a class="dropdown-item" href="/register">Register</a>
                            <a class="dropdown-item" href="/login">Login</a>
                            @endguest
                            @auth
                            <a class="dropdown-item" href="#"> Welcome {{ auth()->user()->name }} </a>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item focus-none" onclick="return confirm('Are you sure want to logout?')">
                                    Logout
                                </button>
                            </form>
                            <a class="dropdown-item" href="#">Setting</a>
                            @endauth
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
