<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <ul class="order-md-3 navbar-nav navbar-no-expand order-1 ml-auto">
            <!-- Icon Login -->
            <li class="nav-item">
                <a class="nav-link" href="#"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-in-alt"></i> <!-- Ikon logout -->
                    <span class="ml-1">Logout</span> <!-- Teks di sebelah kanan ikon -->
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </ul>
</nav>
<!-- /.navbar -->
