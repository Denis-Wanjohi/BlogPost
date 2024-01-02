<header>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a href="/" class="navbar-brand">NEWS TIMES KE</a>
            <button class="navbar-toggler"
                    type="button" 
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseNavbar"
                    aria-controls="content"
                    aria-expanded="false"
                    aria-label="Toggle navigaation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @auth
               <div class="collapse navbar-collapse text-end" id="collapseNavbar">
                <ul class="navbar-nav">
                    {{-- <li class="nav-item"><a href="/" class="nav-link">Blogs</a></li> --}}
                    {{-- <li class="nav-item"><a href="#" class="nav-link">Events</a></li> --}}
                    <li class="nav-item"><a href="/createEvent" class="nav-link">Create event</a></li>
                    <li class="nav-item"><a href="/createBlog" class="nav-link">Create blog</a></li>
                    <li class="nav-item"><a href="/manageBlog" class="nav-link">Manage blog</a></li>
                    <li class="nav-item"><a href="/manageEvent" class="nav-link">Manage event</a></li>
                    {{-- <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" 
                                    id="navDrop" 
                                    role="button" 
                                    data-bs-toggle="dropdown">Dropdown</a>
                        <ul class="dropdown-menu" aria-labelledby="navDrop">
                            <li><a href="#" class="dropdown-item">one</a></li>
                            <li><a href="#" class="dropdown-item">one</a></li>
                            <li><a href="#" class="dropdown-item">one</a></li>
                        </ul> --}}
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="btn btn-primary" type="submit">Logout</button>
                        </form>
                    </li>
                {{-- </li> --}}
                </ul>
            </div> 
            @else
                <div class="row">
                    <form action="/login" class="col-md-6" method="POST">
                        @csrf
                        @method('GET')
                        <button class="btn btn-primary" type="submit">LOGIN</button>
                    </form>
                    <form action="/register" class="col-md-6" method="POST">
                        @csrf
                        @method('GET')
                        <button class="btn btn-primary" type="submit">Register</button>
                    </form>
                </div>
            @endauth
            
        </div>
    </nav>

</header>