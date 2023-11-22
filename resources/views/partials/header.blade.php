<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center" style="background: #cc2b5e;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #753a88, #cc2b5e);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #753a88, #cc2b5e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <div class="container d-flex align-items-center">

        <div class="row logo me-auto d-flex">
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="/" class="d-flex align-items-center">
                <img src="img/logo-florist.png" alt="" class="img-fluid">
                <h1>Florist</h1>
            </a>
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0 fw-semibold">
            <ul>
            <li><a class="nav-link scrollto {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a></li>
            <li><a class="nav-link scrollto {{ ($active === "product") ? 'active' : '' }}" href="/product">Product</a></li>
            <li><a class="nav-link scrollto {{ ($active === "order") ? 'active' : '' }}" href="/order">Order</a></li>
            </ul>

            <ul id="navbar" class="navbar order-last order-lg-0">
                    @auth
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                        </form>
                        </li>
                    </ul>
                    </li>
                    @else
                    <li><a class="getstarted scrollto {{ ($active === "login") ? 'active' : '' }}" href="/login">Login</a></li>
                @endauth
            </ul>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->