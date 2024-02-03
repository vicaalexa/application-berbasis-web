<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Company Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body class="container">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Admin Halaman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Admin Tutors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Admin Partners</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Admin Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Logout>></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <h1>Halaman Admin</h1>
        <p>
            <a href="halaman_input.php">
            <input type="button" class="btn btn-primary" value="Buat Halaman Baru"/>
            </a>
        </p>
        <form class="row g-3" method="get">
            <div class="col-auto">
                <input type="text" class="form-control" placeholder="Masukkan Kata Kunci">
            </div>
        </form>
    </main>
    <footer class="bg-light">
        <div class="text-center p-3" style="background:#CCCCCC">
        Copyright &copy; 2024
    </div>
    </footer>
</body>

</html>