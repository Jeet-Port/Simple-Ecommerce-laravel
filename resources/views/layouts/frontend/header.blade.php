
<title>Navigation Bar with Sidebar</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
    .navbar {
        padding: 10px;
    }
    
    .sidebar {
        position: fixed;
        top: 0;
        right: -250px;
        width: 250px;
        height: 100%;
        background-color: #f8f9fa;
        padding: 20px;
        z-index: 1030;
        transition: right 0.3s;
    }
    
    .sidebar h4 {
        margin-bottom: 20px;
    }
    
    .sidebar-menu {
        list-style: none;
        padding: 0;
    }
    
    .sidebar-menu li {
        margin-bottom: 10px;
    }
    
    .sidebar-menu li a {
        text-decoration: none;
        color: #333;
    }
</style>

<body>
    <nav class="navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/products" class="nav-link">Product</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            @auth
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/{{Auth::user()->name}}/cart" class="nav-link">Cart</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <!-- Right Sidebar Toggle Button -->
                <button id="sidebar-toggle-button" class="btn nav-link">
                    {{Auth::user()->name}}
                </button>
            </li>
            @else
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('login') }}" class="nav-link">Log in</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('register') }}" class="nav-link">Register</a>
            </li>
            @endif
            @endauth
        </ul>
    </nav>
    
    <!-- Right Sidebar -->
    <div id="sidebar" class="sidebar">
        @auth
        <h4>Welcome, {{ Auth::user()->name }}</h4>
        <ul class="sidebar-menu">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="/dashboard">Dashboard</a></li>
            <li>
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
    @endauth
</div>
<!-- End Right Sidebar -->

<script>
    var sidebar = document.getElementById("sidebar");
    
    document.getElementById("sidebar-toggle-button").addEventListener("click", function () {
        if (sidebar.style.right === "-250px") {
            sidebar.style.right = "0";
        } else {
            sidebar.style.right = "-250px";
        }
    });
    
    // Close sidebar when clicking outside
    document.addEventListener("click", function (event) {
        var toggleButton = document.getElementById("sidebar-toggle-button");
        
        if (!sidebar.contains(event.target) && !toggleButton.contains(event.target)) {
            sidebar.style.right = "-250px";
        }
    });
</script>

</body>