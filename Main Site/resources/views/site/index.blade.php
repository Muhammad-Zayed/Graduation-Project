<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meet Me</title>
    <link rel="shortcut icon" href="./images/video-chat.png" type="image/x-icon">
    <link rel="stylesheet" href="./style/homepage.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <!------ start header ------>
    <header class="header">
        <!-- start navbar -->
        <nav class="navbar">
            <div class="container">
                <div class="row">
                    <!-- start logo -->
                    <h1 class="logo">
                        <img src="./images/video-chat.png" alt="video-chat-logo" />
                    </h1>
                    <!-- end logo -->
                    <!-- start navs -->
                    <ul class="navs">
                        <li><a href="" id="join_meeting">join meeting</a></li>
                        @if(!(auth()->check()))<li><a href="{{ route('login') }}">login</a></li>@endif
                        @if(auth()->check())
                        <li><a href="{{ route('profile') }}">Profile</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                        @endif
                    </ul>
                    <!-- end navs  -->

                    <!-- start toggle menu button -->
                    <button class="toggle_menu_btn">
                        <i class="fal fa-bars"></i>
                    </button>
                    <!-- end toggle menu button -->
                </div>
            </div>
        </nav>
        <!-- end navbar -->

        <!-- start header content -->
        <section class="header_content">
            <div class="container">
                <div class="row">
                    <section class="info_side">
                        <div class="info_side_content">
                            <p class="animate_1">Online Hight Quality Video Meeting.</p>
                            <p class="animate_1">Keeping you securely connected wherever you are.</p>
                            <button class="animate_1" id="scroll_to">about us <span><i
                                        class="fas fa-long-arrow-alt-right"></i></span></button>
                        </div>
                    </section>
                    <section class="img_side">
                        <img src="./images/male-and-female-chatting-with-each-other-through-mobile-2330122-0.svg"
                            alt="">
                    </section>
                </div>
            </div>
        </section>
        <!-- end header content -->
    </header>
    <!------ end header ------>

    <!-- start about -->
    <div class="about" id="about">
        <h2 class="title">about</h2>
        <div class="row">
            <!-- start image side  -->
            <section class="about_img_side">
                <img class="about__img" src="./images//Group 15.svg" alt="">
            </section>
            <!-- end image side  -->
            <!-- start content side  -->
            <section class="about_content_side">
                <section class="content">
                    <p class="about_info">Online Hight Quality Video Meeting.</p>
                    <p class="about_info">Online Hight Quality Video Meeting.</p>
                    <p class="about_info">Online Hight Quality Video Meeting.</p>
                    <p class="about_info">Online Hight Quality Video Meeting.</p>
                </section>
            </section>
            <!-- end content side  -->
        </div>
    </div>
    <!-- end about -->

    <!-- start team -->
    <div class="team">
        <div class="container">
            <h2 class="title">team</h2>
            <div class="row">
                <div class="item">
                    <div class="img">
                        <img class="item__img" src="./images/kinany.JPG" alt="">
                    </div>
                    <div class="info">
                        <h3 class="name">mohamed elkinany</h3>
                        <p class="jop">frontend developer</p>
                    </div>
                    <div class="social">
                        <a href="#"><img src="./images/facebook-logo-2019.png" alt=""></a>
                        <a href="#"><img src="./images/instagram.png" alt=""></a>
                        <a href="#"><img src="./images/twitter.png" alt=""></a>
                    </div>
                    <div class="email">
                        <p>elgaml.info@gmail.com</p>
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                        <img class="item__img" src="./images/mostafa.png" alt="">
                    </div>
                    <div class="info">
                        <h3 class="name">mostafa elgaml</h3>
                        <p class="jop">full stack developer</p>
                    </div>
                    <div class="social">
                        <a href="#"><img src="./images/facebook-logo-2019.png" alt=""></a>
                        <a href="#"><img src="./images/instagram.png" alt=""></a>
                        <a href="#"><img src="./images/twitter.png" alt=""></a>
                    </div>
                    <div class="email">
                        <p>elgaml.info@gmail.com</p>
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                        <img class="item__img" src="./images/zayed.JPG" alt="">
                    </div>
                    <div class="info">
                        <h3 class="name">muhammed zayed</h3>
                        <p class="jop">full stack developer</p>
                    </div>
                    <div class="social">
                        <a href="#"><img src="./images/facebook-logo-2019.png" alt=""></a>
                        <a href="#"><img src="./images/instagram.png" alt=""></a>
                        <a href="#"><img src="./images/twitter.png" alt=""></a>
                    </div>
                    <div class="email">
                        <p>elgaml.info@gmail.com</p>
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                        <img class="item__img" src="./images/hesham.jpg" alt="">
                    </div>
                    <div class="info">
                        <h3 class="name">hesham ahmed</h3>
                        <p class="jop">frontend developer</p>
                    </div>
                    <div class="social">
                        <a href="#"><img src="./images/facebook-logo-2019.png" alt=""></a>
                        <a href="#"><img src="./images/instagram.png" alt=""></a>
                        <a href="#"><img src="./images/twitter.png" alt=""></a>
                    </div>
                    <div class="email">
                        <p>elgaml.info@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end team -->
    <!-- start footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer_info_side">
                    <div class="footer_title">
                        <img src="./images/video-chat.png" alt="">
                        <h3>Online Hight Quality Video Meeting</h3>
                    </div>
                    <div class="foot_img">
                        <img src="images/Group 19.svg" alt="">
                    </div>
                </div>
                <div class="contact_info">
                    <h4>never miss an update!</h4>
                    <div class="contact_item">
                        <div class="row">
                            <img src="./images/facebook-logo-2019.png" alt="">
                            <p>@graduation_project_team</p>
                        </div>
                    </div>
                    <div class="contact_item">
                        <div class="row">
                            <img src="./images/instagram.png" alt="">
                            <p>@graduation_project_team</p>
                        </div>
                    </div>
                    <div class="contact_item">
                        <div class="row">
                            <img src="./images/twitter.png" alt="">
                            <p>@graduation_project_team</p>
                        </div>
                    </div>
                    <div class="contact_item">
                        <div class="row">
                            <img src="./images/github.png" alt="">
                            <p>@graduation_project_team</p>
                        </div>
                    </div>
                    <div class="contact_item">
                        <div class="row">
                            <img src="./images/linkedin.png" alt="">
                            <p>@graduation_project_team</p>
                        </div>
                    </div>
                </div>
                <div class="form_side">
                    <h4>contact us</h4>
                    <form action="">
                        <input type="email" name="email" id="" placeholder="Email:" required>
                        <textarea name="message" id="" placeholder="Message" required></textarea>
                        <button type="submit">send <span><i class="fas fa-paper-plane"></i></span></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="copy_right">
            <p>all rights reserved. copyright &copy; 2020 made with <span>♥</span> by GPT</p>
        </div>
    </footer>
    <!-- end footer -->


    <!-- start scroll to top button -->
    <button class="scroll_to_top"><i class="fas fa-arrow-up"></i></button>
    <!-- end scroll to top button -->

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

    <!------------------ start join box ----------------->
    <div class="join_box_container nonactive">
        <div class="join_box">
            <div class="title">
                <p>join meeting</p>
                <button class="close_btn"><i class="fad fa-times"></i></button>
            </div>
            <div class="join_form">
                <form action="{{route('join')}}" method="POST">
                    @csrf
                    <div class="input_group">
                        <label for="id">ID</label>
                        <input type="text" name="id">
                    </div>
                    <div class="input_group">
                        <label for="id">password</label>
                        <input type="password" name="password">
                    </div>
                    <input type="submit" class="submit_btn"></input>
                </form>
            </div>
        </div>
    </div>
    <!------------------ end join box ----------------->


    @foreach ($errors->all() as $error)
    <div class="msg_container">
        <div class="msg error-msg">
            <i class="fas fa-times-circle"></i>
            {{$error}}
            <i class="hide_not fas fa-times"></i>
        </div>
    </div>
    @endforeach



    <!---------------- start response Loading ---------------->
    <div class="res_loading">
        <div class="cube">
            <div class="side"></div>
            <div class="side"></div>
            <div class="side"></div>
            <div class="side"></div>
            <div class="side"></div>
            <div class="side"></div>
        </div>
    </div>
    <!---------------- end response Loading ---------------->


    <script src="./plugins/gsap.min.js" defer></script>
    <script src="./plugins/ScrollTrigger.min.js" defer></script>
    <script src="./plugins/ScrollToPlugin.min.js" defer></script>
    <script src="./plugins/jquery.js" defer></script>
    <script src="plugins/jquery.nicescroll.min.js" defer></script>
    <script src="./js/index.js" defer></script>
    <script src="./js/loadingpage.js" defer></script>
    <script src="./js/alert.js" defer></script>
    <script src="./js/join-pop-up.js" defer></script>
    <script src="./js/index-animation.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js" defer></script>
</body>

</html>
