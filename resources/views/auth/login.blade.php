<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>German Fernandez - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" sizes="114x114" href="{{{ asset('assets/img/favicon.png') }}}">

    <!-- App css -->
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="/admin/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/css/style.css" rel="stylesheet" type="text/css" />

    <script src="/admin/js/modernizr.min.js"></script>

</head>


<body class="account-pages">

<!-- Begin page -->
<div class="accountbg" style="background: url('/gf/images/gf/banner_gf.png');background-size: cover;"></div>

<div class="wrapper-page account-page-full">

    <div class="card">
        <div class="card-block">

            <div class="account-box">

                <div class="card-box p-5">
                    <h2 class="text-uppercase text-center pb-4">
                        <a href="index.html" class="text-success">
                            <span><img src="/gf/images/gf/logoGF.png" alt="" height="85"></span>
                        </a>
                    </h2>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group m-b-20 row" {{ $errors->has('email') ? ' is-invalid' : '' }}>
                            <div class="col-12">
                                <label for="emailaddress">Email</label>
                                <input class="form-control" value="{{ old('email') }}" name="email" type="email" id="emailaddress" required="" placeholder="Enter email" autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row m-b-20 {{ $errors->has('password') ? ' is-invalid' : '' }}">
                            <div class="col-12">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password" required="" id="password" placeholder="Enter password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row m-b-20">
                            <div class="col-12">

                                <div class="checkbox checkbox-custom">
                                    <input id="remember" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember">
                                        Recordar
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group row text-center m-t-10">
                            <div class="col-12">
                                <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Sign In</button>
                            </div>
                        </div>

                    </form>

                    <div class="row m-t-50">
                        <div class="col-sm-12 text-center">
                            <p class="text-muted">Olvido su contraseña? <a href="/login" class="text-dark m-l-5"><b>Click aqui!</b></a></p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="m-t-40 text-center">
        <p class="account-copyright"> © 2018 Germán Fernandez. All rights reserved.</p>
    </div>

</div>



<!-- jQuery  -->
<script src="/admin/js/jquery.min.js"></script>
<script src="/admin/js/popper.min.js"></script>
<script src="/admin/js/bootstrap.min.js"></script>
<script src="/admin/js/metisMenu.min.js"></script>
<script src="/admin/js/waves.js"></script>
<script src="/admin/js/jquery.slimscroll.js"></script>

<!-- App js -->
<script src="/admin/js/jquery.core.js"></script>
<script src="/admin/js/jquery.app.js"></script>

</body>
</html>