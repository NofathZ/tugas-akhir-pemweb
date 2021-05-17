<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajarin.id</title>
    <link rel="stylesheet" href="css/mentor-signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <a class="btn btn-outline-primary" href="" role="button">Sign Up</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <section id="login-form">
        <div class="whitespace"></div>
        <div class="form-signin border shadow p-3 mb-5 bg-body rounded-3">
            <form class="needs-validation mx-3 my-3 " action="{{ route('register') }}" method="POST" novalidate>
            @csrf
                <h1 class="h4 mb-4 fw-bold text-center">Sign Up as Mentor</h1>
                <div class="form-row">
                    <div class="mb-3">
                        <div class="picture-container">
                            <div class="picture">
                                <img src="img/user-circle-solid.svg" class="picture-src" id="profilePreview">
                                <input type="file" id="imageUpload">
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Name" required autocomplete="name">
                        <label for="name" class="form-label">Full name</label>
                        <div class="invalid-feedback">
                            Please enter a valid name!
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                        <label for="email" class="form-label">Email</label>
                        <div class="invalid-feedback" role="alert">
                            Please enter a valid email!
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" minlength="8" pattern="(?=^.{1,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required autocomplete="new-password">
                        <label for="password">Password</label>
                        <div class="invalid-feedback" role="alert">
                            You must enter a password that contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters!
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" id="validationPhone" placeholder="Telephone"
                            pattern="\+?([ -]?\d+)+|\(\d+\)([ -]\d+)"
                            required>
                        <label for="validationPhone" class="form-label">Phone number</label>
                        <div class="invalid-feedback">
                            Please enter a valid phone number!
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Required files</label>
                        <input type="file" class="form-control" required>
                        <div class="invalid-feedback">
                            Please upload the required file!
                        </div>
                    </div>
                </div>
                <input type="hidden" name="role" value="mentor">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary btn-lg mb-3 col-12 p-3" type="submit">SIGN UP</button>
                </div>
                <p class="fw-light fs-6 text-center">Already have an account? <a href="/login"
                        class="text-decoration-none">Login</a>
                </p>
                <input type="hidden" name="role" value="mentor">
            </form>
        </div>
    </section>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/profile-picture.js"></script>
    <script src="js/form-validation.js"></script>
</body>
</html>