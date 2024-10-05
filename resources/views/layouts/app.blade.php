<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Employees Management</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Employees Management</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    @if(auth()->check())
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ 'Welcome, ' . auth()->user()->name }}</a>
                        </li>
                    @endif
                </ul>
                <form class="d-flex" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-outline-danger" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>  

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
