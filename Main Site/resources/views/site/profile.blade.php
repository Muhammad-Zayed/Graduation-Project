<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet Me</title>
    <link rel="shortcut icon" href="./images/video-chat.png" type="image/x-icon">
    <link rel="stylesheet" href="./plugins/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./style/profile.css">
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
    <!-- start wrapper -->
    <div class="profile_wrapper row justify-content-center align-items-center">
        <!-- start content container -->
        <div class="content_container row">
            <!-- start menu side -->
            <div class="menu_side col-3">
                <!-- start title  -->
                <div class="title">
                    @if($user->image)
                        <img src="{{asset('storage/'.$user->image)}}" alt="">
                    @else
                        <img src="/images/avatar.png" alt="">
                    @endif
                    <h3 class="name">{{ $user->first_name }}</h3>
                        <form action="{{route('photo')}}" method="POST" enctype="multipart/form-data" class="img_form">
                            @csrf
                            <div class="fileUpload">
                                <input type="file" name="image" enctype="multipart/form-data" class="img_choose">
                                <span>Choose Image</span>
                            </div>
                            <input type="submit" value="Save" id="save_image" class="img_submit">
                        </form>
                </div>
                <!-- end title  -->

                <!-- start navs -->
                <div class="navs">
                    <a href="{{route('index')}}">home</a>
                    <a href="" id="join_meeting">join meeting</a>


                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="logout">logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                </div>
                <!-- end navs -->

            </div>
            <!-- end menu side -->

            <!-- start info side -->
            <div class="info_side col-9 row justify-content-center align-items-center g-0">
                <!-- start info container -->
                <div class="info_container">
                    <h2 class="title">profile</h2>
                    <div class="info">
                        <div class="item row justify-content-center align-items-center g-0">
                            <p class="item_title col-2">host :</p>
                            <p class="item_cont col-9">{{$user->first_name }} {{$user->last_name}} Personal Meeting Room</p>
                        </div>
                        <div class="item row justify-content-center align-items-center g-0">
                            <p class="item_title col-2">Meeting ID </p>
                            <p class="item_cont col-9"><input type="text" value=" : {{$user->id}}" disabled>
                        </div>

                        <div class="item row justify-content-center align-items-center g-0">
                            <p class="item_title col-2">join URL :</p>
                            <textarea class="item_cont col-9" id="invite_code"
                                disabled>http://127.0.0.1:8000/meeting/{{$user->id}} </textarea>
                        </div>
                        <div class="item row justify-content-center align-items-center g-0">
                            <p class="item_title col-2">email :</p>
                            <p class="item_cont col-9">{{$user->email}}</p>
                        </div>

                        <div class="item row justify-content-center align-items-center g-0">
                            <p class="item_title col-4">meeting password :</p>
                            <p class="item_cont col-7">{{$user->meeting_password}}</p>
                        </div>

                        <div class="option_btn row align-items-center g-0">
                            <a href="{{route('meeting',$user->id)}}" class="start_meeting col-2"> Start Meeting</a>
                            <button class="copy_invite col-3"><span><i class="fad fa-copy"></i></span>Copy Invite
                                Code</button>
                        </div>
                    </div>
                </div>
                <!-- end info container ->
            </div>
            <!-- end info side -->
            </div>
            <!-- end content container -->

        </div>
        <!-- end wrapper -->


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
        <script src="./plugins/bootstrap.min.js"></script>
        <script src="./js/profile.js"></script>
        <script src="./js/loadingpage.js"></script>
        <script src="./js/alert.js" defer></script>
        <script src="./js/join-pop-up.js"></script>
</body>

</html>
