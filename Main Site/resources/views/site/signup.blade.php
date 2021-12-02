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
    <div class="wraper">
        <div class="row  g-0 justify-content-center align-items-center">
            <!-- start image side -->
            <div class="col-lg-6 image_side">
                <div class="overlay row g-0 justify-content-center align-items-center">
                    <div class="content row">
                        <h2>you have an acount ?</h2>
                        <a class="login_page" href="{{ route('login') }}">login</a>
                    </div>
                </div>
            </div>
            <!-- end image side -->

            <!-- start from side -->
            <div class="col-lg-6 col-md-12  col-xs-12 form_side row g-md-0 justify-content-center align-items-center">
                <form action="" class="col-lg-6 col-md-9 col-xs-12">

                    <!-- start title -->
                    <div class="title">
                        <h2>signup</h2>
                    </div>
                    <!-- end title -->


                    <!-- start input goup for name -->
                    <div class="input_group">
                        <div class="row input_title ">
                            <div class="col-4">
                                <p class="label">name :</p>
                            </div>
                            <div class="col-8">
                                <p class="error_mess" id="name_error_mess"></p>
                            </div>
                        </div>
                        <div class="input row">
                            <input type="text" name="name" id="user_name">
                            <span class="error_icon"><i class="fad" id="name_error_icon"></i></span>
                            <!-- check-circle exclamation-circle-->
                        </div>
                    </div>
                    <!-- end input goup for name -->

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
                            <input type="email" name="email" id="email">
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

                    <!-- start input goup for confirm password -->
                    <div class="input_group">
                        <div class="row input_title">
                            <div class="col-6">
                                <p class="label">confirm password :</p>
                            </div>
                            <div class="col-6">
                                <p class="error_mess" id="confirm_password_error_mess"></p>
                            </div>
                        </div>
                        <div class="input row">
                            <input type="password" name="confirm_password" id="confirm_password">
                            <span class="error_icon"><i class="fad" id="confirm_password_error_icon"></i></span>
                            <!-- check-circle exclamation-circle-->
                        </div>
                    </div>
                    <!-- end input goup for confirm password -->

                    <!-- start control buttons -->
                    <div class="controls row justify-content-md-between">
                        <button type="submit" class="submit col-md-3 col-xs-12">signup</button>
                        <button class="facebook_sign col-md-3 col-xs-12"><i class="fab fa-facebook-f"></i></button>
                        <button type="submit" class="google_sign  col-md-3 col-xs-12"><img
                                src="./images/google-icon.png" alt=""></button>
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



    <!------------ start alerts  -------------->
    <div class="msg_container">
        <div class="msg info-msg">
            <i class="fas fa-info-circle"></i>
            This is an info message.
            <i class="hide_not fas fa-times"></i>
        </div>

        <div class="msg success-msg">
            <i class="fas fa-check"></i>
            This is a success message.
            <i class="hide_not fas fa-times"></i>
        </div>

        <div class="msg warning-msg">
            <i class="fas fa-exclamation-triangle"></i>
            This is a warning message.
            <i class="hide_not fas fa-times"></i>
        </div>

        <div class="msg error-msg">
            <i class="fas fa-times-circle"></i>
            This is a error message.
            <i class="hide_not fas fa-times"></i>
        </div>
    </div>
    <!------------ END alerts  ----------------->




    <script src="./js/signup.js" defer></script>
    <script src="./js/loadingpage.js" defer></script>
    <script src="./js/alert.js" defer></script>
</body>

</html>