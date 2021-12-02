<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meeting</title>
    <link rel="shortcut icon" href="./images/video-chat.png" type="image/x-icon">
    <link rel="stylesheet" href="./plugins/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./style/register.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
        <!------------ start alerts  -------------->
    <div class="msg_container">
    @foreach ($errors->all() as $error)
        <div class="msg error-msg">
            <i class="fas fa-times-circle"></i>
            {{$error}}
            <i class="hide_not fas fa-times"></i>
        </div>
    @endforeach
    </div>
    <!------------ END alerts  ----------------->
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
                        <h2>you have an acount ?</h2>
                        <a class="login_page" href="{{ route('login') }}">login</a>
                    </div>
                </div>
            </div>
            <!-- end image side -->

            <!-- start from side -->
            <div class="col-lg-6 col-md-12  col-xs-12 form_side row g-md-0 justify-content-center align-items-center">
                <form method="POST" action="{{ route('register') }}"  class="col-lg-6 col-md-9 col-xs-12">
                    @csrf
                    <!-- start title -->
                    <div class="title">
                        <h2>signup</h2>
                    </div>
                    <!-- end title -->


                    <!-- start input goup for name -->
                    <div class="input_group">
                        <div class="row input_title ">
                            <div class="col-4">
                                <p class="label">First Name :</p>
                            </div>
                            <div class="col-8">
                                <p class="error_mess" id="name_error_mess"></p>
                            </div>
                        </div>
                        <div class="input row">
                            <input type="text" name="first_name" id="user_name" value="{{ old('first_name') }}">
                            <span class="error_icon"><i class="fad" id="name_error_icon"></i></span>
                            <!-- check-circle exclamation-circle-->
                        </div>
                    </div>

                    <!-- end input goup for name -->                    <!-- start input goup for name -->
                    <div class="input_group">
                        <div class="row input_title ">
                            <div class="col-4">
                                <p class="label">Last Name :</p>
                            </div>
                            <div class="col-8">
                                <p class="error_mess" id="name_error_mess"></p>
                            </div>
                        </div>
                        <div class="input row">
                            <input type="text" name="last_name" id="user_name" value="{{ old('last_name') }}">
                            <span class="error_icon"><i class="fad" id="name_error_icon"></i></span>
                            <!-- check-circle exclamation-circle-->
                        </div>
                    </div>
                    <!-- end input goup for name -->

                    <!-- start input goup for email -->
                    <div class="input_group">
                        <div class="row input_title">
                            <div class="col-4">
                                <p class="label">Email :</p>
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
                                <p class="label">Password :</p>
                            </div>
                            <div class="col-8">
                                <p class="error_mess" id="password_error_mess"></p>
                            </div>
                        </div>
                        <div class="input row">
                            <input type="password" name="password" id="password" >
                            <span class="error_icon"><i class="fad" id="password_error_icon"></i></span>
                            <!-- check-circle exclamation-circle-->
                        </div>
                    </div>
                    <!-- end input goup for password -->

                    <!-- start input goup for confirm password -->
                    <div class="input_group">
                        <div class="row input_title">
                            <div class="col-6">
                                <p class="label">Confirm Password :</p>
                            </div>
                            <div class="col-6">
                                <p class="error_mess" id="confirm_password_error_mess"></p>
                            </div>
                        </div>
                        <div class="input row">
                            <input type="password" name="password_confirmation" id="confirm_password">
                            <span class="error_icon"><i class="fad" id="confirm_password_error_icon"></i></span>
                            <!-- check-circle exclamation-circle-->
                        </div>
                    </div>
                    <!-- end input goup for confirm password -->

                    <!-- start control buttons -->
                    <div class="controls row justify-content-md-between">
                        <button type="submit" class="submit col-md-3 col-xs-12">signup</button>
{{--                         <button class="facebook_sign col-md-3 col-xs-12"><a href="facebook.com"><i class="fab fa-facebook-f"></i></button></a>
                        <button type="submit" class="google_sign  col-md-3 col-xs-12"><a href="google.com"><img
                                src="./images/google-icon.png" alt=""></a></button>
 --}}                    </div>
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
    <script src="./js/signup.js" defer></script>
    <script src="./js/loadingpage.js" defer></script>
    <script src="./js/alert.js" defer></script>
</body>

</html>