<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V5</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="assets/login/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('{{asset('assets/login/images/bg-01.jpg')}}');">
        <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
            <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
					<span class="login100-form-title">
						<img src="{{asset('assets/images/ht2ml/logo.png')}}" style="width: 100%; height: auto;">
					</span>

{{--                <a href="#" class="btn-face m-b-20">--}}
{{--                    <i class="fa fa-facebook-official"></i>--}}
{{--                    Facebook--}}
{{--                </a>--}}

{{--                <a href="#" class="btn-google m-b-20">--}}
{{--                    <img src="{{asset('assets/login/images/icons/icon-google.png')}}" alt="GOOGLE">--}}
{{--                    Google--}}
{{--                </a>--}}

                @if ($errors->has('email') || $errors->has('password'))
                    <div class="col-sm-12" style="display: block">
                        <div class="alert alert-warning">
                            <strong>Username ou Senha incorreto</strong>
                        </div>
                    </div>
                @endif

                <div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Preencher Username">
                    <input class="input100" type="text" name="username" >
                    <span class="focus-input100"></span>
                </div>

                <div class="p-t-13 p-b-9">
						<span class="txt1">
							Senha
						</span>

                    <a href="{{ route('password.request') }}" class="txt2 bo1 m-l-5">
                        Esqueceu?
                    </a>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Preencher Password">
                    <input class="input100" type="password" name="pass" >
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn m-t-17">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="w-full text-center p-t-55">
{{--						<span class="txt2">--}}
{{--							Not a member?--}}
{{--						</span>--}}

{{--                    <a href="#" class="txt2 bo1">--}}
{{--                        Sign up now--}}
{{--                    </a>--}}
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="assets/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="assets/login/vendor/bootstrap/js/popper.js"></script>
<script src="assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="assets/login/vendor/daterangepicker/moment.min.js"></script>
<script src="assets/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="assets/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="assets/login/js/main.js"></script>

</body>
</html>