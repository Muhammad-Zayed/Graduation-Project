<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet Me</title>
    <link rel="shortcut icon" href="./images/video-chat.png" type="image/x-icon">
    <link rel="stylesheet" href="./plugins/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./style/register.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div class="msg_container">
    @foreach ($errors->all() as $error)
        <div class="msg error-msg">
            <i class="fas fa-times-circle"></i>
            {{$error}}
            <i class="hide_not fas fa-times"></i>
        </div>
    @endforeach

    </div>
    <div class="wraper">
        <div class="row  g-0 justify-content-center align-items-center">
            <!-- start image side -->
            <div class="col-lg-6 image_side">
                <div class="overlay row g-0 justify-content-center align-items-center">
                    <!-------- start Home Button new update ------->
                    <div class="home_btn">
                        <a href="{{route('index')}}"><img src="images/video-chat.png" alt=""></a>
                    </div>
                    <!-------- end Home Button new update ------->

                    <div class="content row">
                        <h2>you don't have an acount ?</h2>
                        <a class="login_page" href="{{ route('register') }}">signup</a>
                    </div>
                </div>
            </div>
            <!-- end image side -->

            <!-- start from side -->
            <div class="col-lg-6 col-md-12  col-xs-12 form_side row g-md-0 justify-content-center align-items-center">
                <form action="{{ route('login') }}" method="POST" class="col-lg-6 col-md-9 col-xs-12">
                    @csrf
                    <!-- start title -->
                    <div class="title">
                        <h2>login</h2>
                    </div>
                    <!-- end title -->


                    <!-- start input goup for email -->
                    <div class="input_group">
                        <div class="row input_title">
                            <div class="col-4">
                                <p class="label">email :</p>
                            </div>
                            <div class="col-8">
                                <p class="error_mess" id="email_error_mess"></p>
                            </div>
                        </div>
                        <div class="input row">
                            <input type="email" name="email" id="email" value="{{ old('email') }}">
                            <span class="error_icon"><i class="fad " id="email_error_icon"></i></span>
                            <!-- check-circle exclamation-circle-->
                        </div>
                    </div>
                    <!-- end input goup for email -->

                    <!-- start input goup for password -->
                    <div class="input_group">
                        <div class="row input_title">
                            <div class="col-4">
                                <p class="label">password :</p>
                            </div>
                            <div class="col-8">
                                <p class="error_mess" id="password_error_mess"></p>
                            </div>
                        </div>
                        <div class="input row">
                            <input type="password" name="password" id="password">
                            <span class="error_icon"><i class="fad" id="password_error_icon"></i></span>
                            <!-- check-circle exclamation-circle-->
                        </div>
                    </div>
                    <!-- end input goup for password -->
                    <div  class="form-group row" >
                            <div style="float: left; padding: 0" >
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                    </div>
                    <br>
                    <!-- start control buttons -->
                    <div class="controls row justify-content-md-between" style="padding: 0;">
                        <button type="submit" class="submit col-md-3 col-xs-12">login</button>
{{--                         <button class="facebook_sign col-md-3 col-xs-12"><i class="fab fa-facebook-f"></i></button>
                        <button type="submit" class="google_sign  col-md-3 col-xs-12"><img
                                src="./images/google-icon.png" alt=""></button> --}}
                        <br/> 
                        <br/> 
                        <br/> 
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" style="padding: 0;" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                    <!-- end control buttons -->
                </form>
            </div>
            <!-- end form side  -->
        </div>
    </div>


    <!-- start laoding page -->
    <div class="loading_container">
        <div class="wrapper">
            <div class="box-wrap">
                <div class="box one"></div>
                <div class="box two"></div>
                <div class="box three"></div>
                <div class="box four"></div>
                <div class="box five"></div>
                <div class="box six"></div>
            </div>
        </div>
    </div>
    <!-- start laoding page -->


    <script src="./js/login.js" defer></script>
    <script src="./js/loadingpage.js" defer></script>
    <script src="./js/alert.js" defer></script>
</body>

</html>