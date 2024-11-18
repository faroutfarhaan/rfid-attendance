<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            scroll-behavior: smooth;
        }
        section {
            padding: 100px 20px;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MyWebsite</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Footer</a>
                    </li>
                </ul>
                <a href="main.php" class="btn btn-primary ms-auto">Login</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <h1>Welcome to MyWebsite</h1>
                    <p>Your journey starts here!</p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="https://via.placeholder.com/400" alt="Hero Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="bg-light text-center">
        <h2>Features</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4>Feature 1</h4>
                    <p>Details about feature 1.</p>
                </div>
                <div class="col-md-3">
                    <h4>Feature 2</h4>
                    <p>Details about feature 2.</p>
                </div>
                <div class="col-md-3">
                    <h4>Feature 3</h4>
                    <p>Details about feature 3.</p>
                </div>
                <div class="col-md-3">
                    <h4>Feature 4</h4>
                    <p>Details about feature 4.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-secondary text-white text-center">
        <h2>Meet the Team</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4>Member 1</h4>
                    <p>Role/Description of Member 1.</p>
                </div>
                <div class="col-md-3">
                    <h4>Member 2</h4>
                    <p>Role/Description of Member 2.</p>
                </div>
                <div class="col-md-3">
                    <h4>Member 3</h4>
                    <p>Role/Description of Member 3.</p>
                </div>
                <div class="col-md-3">
                    <h4>Member 4</h4>
                    <p>Role/Description of Member 4.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer" class="bg-dark text-white text-center">
        <p>&copy; 2024 MyWebsite. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
