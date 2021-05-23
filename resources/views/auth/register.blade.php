{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajarin.id</title>
    <link rel="stylesheet" href="css/signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>

<body>
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="#">Ajarin.id</a>
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


    <section id="signup">
        <div class="whitespace"></div>
        <div class="text-center title-text">
            <h6>We're glad you're here!</h6>
            <p>First of all, what do you want to do?</p>
        </div>
        <div id="signup">
            <div class="row flex-center-md">
                <div class="col-md-2"></div>
                <div class="col-md-3 border shadow p-5 mb-5 bg-body rounded-3">
                    <div class="panel panel-shadowed text-center">
                        <div class="panel-body">
                            <h5>I am looking for a mentor</h5>
                            <p>Create a <b>mentee</b> account.</p><br>
                            <div><a href="{{ route('mentee-register') }}" type="button" class="btn btn-primary btn-lg">Find a mentor</a></div>
                        </div>
                    </div>

                </div>
                <div class="col-md-2 p-5 align-self-center">
                    <div class="divider ">
                        <p class="text-center fw-bold">OR</p>
                    </div>
                </div>
                <div class="col-md-3 border shadow p-5 mb-5 bg-body rounded-3">
                    <div class="panel panel-shadowed text-center">
                        <div class="panel-body">
                            <h5 class="text-heavy">I want to be a mentor</h5>
                            <p translate="signup.sort_description.recruiter">Create a <b>mentor</b> account.</p><br>
                            <div><a href="{{ route('mentor-register') }}" class="btn btn-lg btn-success">Become a Mentor</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
    <script src="js/signup.js"></script>
</body>
</html> --}}


@extends('layouts.authentification-navbar')

@section('content')
<section id="signup">
    <div class="whitespace"></div>
    <div class="text-center title-text">
        <h6>We're glad you're here!</h6>
        <p>First of all, what do you want to do?</p>
    </div>
    <div id="signup">
        <div class="row flex-center-md">
            <div class="col-md-2"></div>
            <div class="col-md-3 border shadow p-5 mb-5 bg-body rounded-3">
                <div class="panel panel-shadowed text-center">
                    <div class="panel-body">
                        <h5>I am looking for a mentor</h5>
                        <p>Create a <b>mentee</b> account.</p><br>
                        <div><a href="{{ route('mentee-register') }}" type="button" class="btn btn-primary btn-lg">Find a mentor</a></div>
                    </div>
                </div>

            </div>
            <div class="col-md-2 p-5 align-self-center">
                <div class="divider ">
                    <p class="text-center fw-bold">OR</p>
                </div>
            </div>
            <div class="col-md-3 border shadow p-5 mb-5 bg-body rounded-3">
                <div class="panel panel-shadowed text-center">
                    <div class="panel-body">
                        <h5 class="text-heavy">I want to be a mentor</h5>
                        <p translate="signup.sort_description.recruiter">Create a <b>mentor</b> account.</p><br>
                        <div><a href="{{ route('mentor-register') }}" class="btn btn-lg btn-success">Become a Mentor</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection