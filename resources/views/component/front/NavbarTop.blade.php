<nav class="navbar navbar-expand-md navbar-dark bg-nav-top">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item pl-0">
                <div class="dropdown">
                    <a class="nav-link pl-0" href="#"  data-target="sidebar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-th"></i></a>
                    @include('component.front.sidebar')
                </div>
            </li>
        </ul>
        <a class="navbar-brand" href="{{url('/')}}">
            <p class="navbar-cus">Sahuba Shopping&nbsp;</p>
        </a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#nav-search" aria-controls="nav-search" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-search"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-search">
            <ul class="navbar-nav mx-auto">
                <form class="form-inline my-2 my-lg-0" method="GET" action="/search">
                    <div class="input-group">
                        <input name="q" value="{{request()->q}}" type="text" id="searchInput" class="form-control" placeholder="Enter Search keywords">
                        <div class="input-group-prepend">
                            <button class="btn login-btn" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </ul>
        </div>
        <ul class="navbar-nav">
            @guest

            @else
            <li class="nav-item pl-0 d-none d-md-inline" style="line-height:2.5"><strong>{{auth()->user()->name}}</strong></li>
            @endguest
            <li class="nav-item pl-0 pr-0 d-inline">
                <div class="dropdown dropleft">
                    <a class="nav-link p-0" href="#" data-target="profileMenus" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @guest
                        <i class="fas fa-user"></i>
                        @else
                        <div class="top-user-img" style="background-image:url('{{optional(auth()->user()->profileImage)->link()}}')"></div>
                        @endguest
                    </a>
                    <div class="dropdown-menu" id="profileMenus" aria-labelledby="profileMenus">
                        <div class="container" id="menu">
                            <ul class="list-group">
                                @guest
                                    <p class="section">Account</p>
                                    <li class="list-group-item">
                                        <a href="{{url('/login')}}">Login</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{url('/register')}}">Register</a>
                                    </li>
                                @else
                                    <p class="section pt-3">Product</p>
                                    <li class="list-group-item">
                                        <a href="{{url('shopping/products/create')}}">Add New Product</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{url('shopping/products')}}">List Of All Product</a>
                                    </li>
                                    <p class="section pt-3">Shop</p>
                                    <li class="list-group-item">
                                        <a href="{{auth()->user()->profile_link()}}">Profile</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{url('shopping')}}">Dashboard</a>
                                    </li>
                                    <p class="section pt-3">Settings</p>
                                    <li class="list-group-item">
                                        <a href="{{url('shopping/settings')}}">General</a>
                                    </li>
                                    <div class="dropdown-divider" style="border-top:1px solid #568ab5"></div>
                                    <li class="list-group-item">
                                        <a  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">Logout</a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>

