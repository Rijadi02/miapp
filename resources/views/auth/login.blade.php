<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin Pro</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}" />

    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                            <!-- Social login form-->
                            <div class="card my-5">
                                <div class="card-body p-5 text-center">
                                    <div class="h3 font-weight-light mb-3">Kyçuni</div>
                                    <!-- Social login links-->
                                    <!-- <a class="btn btn-icon btn-facebook mx-1" href="#!"><i class="fab fa-facebook-f fa-fw fa-sm"></i></a>
                                        <a class="btn btn-icon btn-github mx-1" href="#!"><i class="fab fa-github fa-fw fa-sm"></i></a>
                                        <a class="btn btn-icon btn-google mx-1" href="#!"><i class="fab fa-google fa-fw fa-sm"></i></a>
                                        <a class="btn btn-icon btn-twitter mx-1" href="#!"><i class="fab fa-twitter fa-fw fa-sm"></i></a> -->
                                </div>
                                <hr class="my-0" />
                                <div method="POST" action="{{ route('login') }}" class="card-body p-5">
                                    <!-- Login form-->
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <!-- Form Group (email address)-->
                                        <div class="form-group">
                                            <label class="text-gray-600 small" for="emailExample">Email addresa</label>
                                            <input id="email" type="email"
                                                class=" form-control form-control-solid py-4 @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                                autofocus />
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                        <!-- Form Group (password)-->
                                        <div class="form-group">
                                            <label class="text-gray-600 small" for="passwordExample">Fjalëkalimi</label>
                                            <input id="password" type="password"
                                                class="form-control form-control-solid py-4 @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password" />
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <!-- Form Group (forgot password link)-->
                                        <!-- <div class="form-group"><a class="small" href="auth-password-social.html">Forgot your password?</a></div> -->
                                        <!-- Form Group (login box)-->
                                        <div class="form-group d-flex align-items-center justify-content-between mb-0">
                                            <div class="custom-control custom-control-solid custom-checkbox">
                                                <input class="custom-control-input small" id="customCheck1"
                                                    type="checkbox" />
                                                <label class="custom-control-label" for="customCheck1">Mbaj mend fjalëkalimin</label>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Kyçu</button>
                                        </div>
                                    </form>
                                </div>
                                <hr class="my-0" />
                                <!-- <div class="card-body px-5 py-4">
                                        <div class="small text-center">
                                            New user?
                                            <a href="auth-register-social.html">Create an account!</a>
                                        </div>
                                    </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="footer mt-auto footer-dark">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &copy; Muslimani Ideal 2021</div>
                        <div class="col-md-6 text-md-right small">
                            <a href="#!">Politikat e Privatësisë</a>
                            &middot;
                            <a href="#!">Termet &amp; Kushtet</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/scripts.js') }}"></script>

</body>

</html>
