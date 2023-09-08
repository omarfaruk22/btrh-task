<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Dashboard</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
        <li>
          <a href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
            <i class="icon ion-power"></i>
             Sign Out</a>
        </li>
        </form>
                <!-- Add more top navigation links as needed -->
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <!-- Sidebar content here -->
            </nav>

            <!-- Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <h1>Welcome <span class="bg-info">{{Auth::user()->name}} </span>to your Dashboard</h1>
                <p>Welcome, John Doe! This is your personalized dashboard where you can manage your tasks, view reports, and more.</p>
                <!-- Add more content here -->
            </main>
        </div>
    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>