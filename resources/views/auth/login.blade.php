<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajarin.id</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>

<body>
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Ajarin.id</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">Features</a>
                        <a class="nav-link" href="#">Pricing</a>
                        <a class="nav-link" href="#">Login</a>
                        <a class="btn btn-outline-primary" href="#" role="button">Sign Up</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <section id="login-form">
        <div class="whitespace"></div>
        <div class="form-signin border shadow p-3 mb-5 bg-body rounded-3">
            <form class="needs-validation mx-3 my-3" action="{{ route('login') }}" method="POST" novalidate>
            @csrf
                <h1 class="h4 mb-5 fw-bold text-center">Login</h1>
                <div class="form-row">
                    <div class="mb-3 mx-auto">
                        <div class="mb-2">Login as:</div>
                        <div class="mb-4">
                            <input type="radio" class="btn-check" name="user_type" id="mentee" value="mentee" autocomplete="off">
                            <label class="btn btn-outline-primary py-2 px-3" for="mentee">Mentee</label>

                            <input type="radio" class="btn-check" name="user_type" id="mentor" value="mentor"
                                autocomplete="off">
                            <label class="btn btn-outline-primary py-2 px-3" for="mentor">Mentor</label>

                        </div>

                    </div>
                    <div class="form-floating mb-4">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                        <label for="email" class="form-label">Email</label>
                        <div class="invalid-feedback" role="alert">
                            Please enter a valid email!
                        </div>
                    </div>
                    <div class="form-floating mb-4">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" minlength="8" pattern="(?=^.{1,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required autocomplete="new-password">
                        <label for="password">Password</label>
                        <div class="invalid-feedback" role="alert">
                            You must enter a password that contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters!
                        </div>
                    </div>
                </div>
                <a href="" class="text-end text-decoration-none ">
                    <p class="fw-light">Forgot password?</p>
                </a>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary btn-lg mb-3 col-12 p-3" type="submit">LOGIN</button>
                </div>
                <p class="fw-light fs-6 text-center">Don't have account yet? <a href="/register"
                        class="text-decoration-none">Sign up now!</a></p>
            </form>
        </div>
    </section>

    <script src="js/form-validation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
</body>

</html>
