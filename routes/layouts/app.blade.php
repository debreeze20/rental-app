<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head section -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Title</title>
</head>
<body>

    <!-- Navbar section -->
    <nav>
        <!-- Other navbar content -->

        <!-- Logout button -->
        @if(Auth::check())
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @endif
    </nav>

    <!-- Main content section -->
    <div>
        @yield('content')
    </div>

    <!-- Footer section -->
    <footer>
        <!-- Footer content -->
    </footer>

</body>
</html>
