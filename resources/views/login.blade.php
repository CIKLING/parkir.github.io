<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Portal - Bootstrap 5 Admin Dashboard Template For Developers
        </title>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <meta
            name="description"
            content="Portal - Bootstrap 5 Admin Dashboard Template For Developers"
        />
        <meta name="author" content="Xiaoying Riley at 3rd Wave Media" />
        <link rel="shortcut icon" href="favicon.ico" />

        <!-- FontAwesome JS-->
        <script defer src="{{asset('assets/plugins/fontawesome/js/all.min.js')}}"></script>

        <!-- App CSS -->
        <link id="theme-style" rel="stylesheet" href="{{asset('assets/css/portal.css')}}" />
    </head>

    <body class="app app-login p-0">
        <div class="row g-0 app-auth-wrapper">
            <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
                <div class="d-flex flex-column align-content-end mt-5">
                    <div class="app-auth-body mx-auto">
                        <div class="app-auth-branding mb-4">
                            <a class="app-logo" href="index.html"
                                ><img
                                    class="logo-icon me-2"
                                    src="{{asset('assets/images/app-logo.svg')}}"
                                    alt="logo"
                            /></a>
                        </div>
                        <h2 class="auth-heading text-center mb-5">
                            Log in to Portal
                        </h2>
                        <div class="auth-form-container text-start">
                            @if ($message = Session::get('error'))
                                <div class="alert alert-danger mt-4" role="alert">
                                    {{$message}}
                                </div>
                            @endif
                            <form class="auth-form login-form" action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="email mb-3">
                                    <label class="sr-only" for="signin-email"
                                        >Username</label
                                    >
                                    <input
                                        id="signin-email"
                                        name="username"
                                        type="text"
                                        class="form-control signin-email"
                                        placeholder="Username"
                                        required="required"
                                    />
                                </div>
                                <!--//form-group-->
                                <div class="password mb-3">
                                    <label class="sr-only" for="signin-password"
                                        >Password</label
                                    >
                                    <input
                                        id="signin-password"
                                        name="password"
                                        type="password"
                                        class="form-control signin-password"
                                        placeholder="Password"
                                        required="required"
                                    />

                                    <!--//extra-->
                                </div>

                                <!--//form-group-->
                                <div class="text-center mt-5">
                                    <button
                                        type="submit"
                                        class="btn app-btn-primary w-100 theme-btn mx-auto"
                                    >
                                        Log In
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!--//auth-form-container-->
                    </div>
                    <!--//auth-body-->

                    <footer class="app-auth-footer">
                        <div class="container text-center py-3">
                            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
                            <small class="copyright"
                                >&copy; GO Parkir 2023. All rights
                                reserved.</small
                            >
                        </div>
                    </footer>
                    <!--//app-auth-footer-->
                </div>
                <!--//flex-column-->
            </div>
            <!--//auth-main-col-->
            <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
                <div class="auth-background-holder"></div>
                <div class="auth-background-mask"></div>
                <div class="auth-background-overlay p-3 p-lg-5">
                    <div class="d-flex flex-column align-content-end h-100">
                        <div class="h-100"></div>
                        <div class="overlay-content p-3 p-lg-4 rounded">
                            <h5 class="mb-3 overlay-title">
                                Go Parkir
                            </h5>
                            <div>
                                Parkir lebih mudah di tiga mall terbesar kota ini dengan Go Parkir - aplikasi 
                                sistem informasi parkir terbaru yang akan memudahkan Anda menemukan tempat 
                                parkir kosong dan menghindari kemacetan di PTC, TP, dan Royal.
                            </div>
                        </div>
                    </div>
                </div>
                <!--//auth-background-overlay-->
            </div>
            <!--//auth-background-col-->
        </div>
        <!--//row-->
    </body>
</html>
