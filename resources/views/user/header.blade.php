<header style="bg-dark ">
    <div class="topbar" style="background: rgb(94, 71, 71)">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-sm">
                    <div class="site-info">
                        <a
                            href="https://www.google.com/search?q=gmail&oq=gmail&aqs=chrome..69i57j0i433i512l3j0i131i433i512j0i512j69i65j69i60.6537j0j4&sourceid=chrome&ie=UTF-8"><span
                                class="mai-call text-primary"></span> +923 310 583 666 </a>
                        <span class="divider">|</span>
                        <a
                            href="https://www.google.com/search?q=gmail&oq=gmail&aqs=chrome..69i57j0i433i512l3j0i131i433i512j0i512j69i65j69i60.6537j0j4&sourceid=chrome&ie=UTF-8"><span
                                class="mai-mail text-primary"></span> hospitalmanagment321@gmail.com </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href=""><span class="text-primary">
                    ISLAMABAD</span>-HOSPITAL</a>
            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="https://www.google.com/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.google.com/">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.google.com/">Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.google.com/">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.google.com/">Contact</a>
                    </li>
                    @if (Auth::user())
                        <li class="nav-item">
                            <a class="btn btn-outline-info ml-lg-3 nav-link" href="{{ route('myappointment') }}">MY
                                Appoinment</a>
                        </li>
                        <li class="nav-item">
                            <x-app-layout>
                            </x-app-layout>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="btn btn-outline-info ml-lg-3 nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-info ml-lg-3 nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
