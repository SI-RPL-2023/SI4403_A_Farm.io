<nav class="nav">
    <img src="../asset/Logo.png" alt="Farmio" class="nav__logo w-75">
    <div class="nav__box">
        <a href="/" class="nav__link">Home</a>
        <a href="/event" class="nav__link">Events</a>
        <a href="/community" class="nav__link">Community</a>
        <a href="/course" class="nav__link">Courses</a>

        @auth
        @if(auth()->check() && auth()->user()->role === "gurutani" )

        <div class="dropdown" id="">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                {{ auth()->user()->username }}
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/gurutani/inbox">My Inbox</a></li>
                <li><a class="dropdown-item" href="/gurutani/addclass">Add Class</a></li>
                <li><a class="dropdown-item" href="/gurutani/addclass">My Course</a></li>
                <li><a class="dropdown-item" href="/gurutani/setting">Edit Profile</a></li>
                <li>
                    <form action="/logout" method="post">
                        @csrf

                        <button type='submit' class='dropdown-item'>
                            <i>Logout</i>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        @else

        <div class="dropdown" id="">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                {{ auth()->user()->username }}
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/user/order">My Order</a></li>
                <li><a class="dropdown-item" href="/user/class">My Course</a></li>
                <li><a class="dropdown-item" href="/user/setting">Edit Profile</a></li>
                <li>
                    <form action="/logout" method="post">
                        @csrf

                        <button type='submit' class='dropdown-item'>
                            <i>Logout</i>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        @endif
        @else
        <a href="/gurutani/login" class="nav__link nav-redirect">Login sebagai  Guru Ternak</a>
        <a href="/login" class="nav__link nav-btn">Login</a>
        @endauth

    </div>
</nav>