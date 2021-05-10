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
            <form class="needs-validation mx-3 my-3 " novalidate>
                <h1 class="h4 mb-5 fw-bold text-center">Sign Up as Mentor</h1>
                <div class="form-row">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="validationName" placeholder="Name" required>
                        <label for="validationName" class="form-label">Full name</label>
                        <div class="invalid-feedback">
                            Please enter a valid name!
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="validationEmail" placeholder="me@example.com"
                            required>
                        <div class="invalid-feedback">
                            Please enter a valid email!
                        </div>
                        <label for="validationEmail" class="form-label">Email</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control " id="validationPassword" pattern="(?=^.{1,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" placeholder="Password" required>
                        <label for="validationPassword">Password</label>
                        
                        <div class="invalid-feedback">
                            You must enter a password that contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters!
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary btn-lg mb-3 col-12 p-3" type="submit">SIGN UP</button>
                </div>
                <p class="fw-light fs-6 text-center">Already have an account? <a href=""
                        class="text-decoration-none">Login</a></p>
            </form>
        </div>
    </section>

    <script src="js/form-validation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
</body>
</html>