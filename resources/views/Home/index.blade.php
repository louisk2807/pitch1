<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Pitch</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="{{asset('images/banner-1.jpg')}}" alt="#"/></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="index.html"><img src="{{asset('images/logo1.jfif')}}" alt="#" width="25%"  /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('Home.index') }}">Pich</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('Home.booking') }}">My booking</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('Customer.logout') }}">Log Out</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header inner -->
<!-- end header -->
<div class="back_re">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>Pitch</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- our_room -->
<div class="our_room">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="serv_hover" class="room">
                    <section class="reservation" id="reservation">
                        <form action="{{ route('Home.store') }}" method="post">
                            @csrf
                            <h3>Make a Reservation</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box">
                                        <p>Your Name <span>*</span></p>
                                        <input type="text" name="name" maxlength="50" required placeholder="Enter your name" class="input">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box">
                                        <p>Your Email <span>*</span></p>
                                        <input type="email" name="email" maxlength="50" required placeholder="Enter your email" class="input">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box">
                                        <p>Your Number <span>*</span></p>
                                        <input type="number" name="number" maxlength="10" min="0" max="9999999999" required placeholder="Enter your number" class="input">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box">
                                        <p>CheckIn <span>*</span></p>
                                        <input type="date" name="check_in" class="input" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box">
                                        <p>CheckOut <span>*</span></p>
                                        <input type="date" name="check_out" class="input" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box">
                                        <p>Sân Số <span>*</span></p>
                                        <select name="pitch_id" class="input" required>
                                            @foreach($Pitchs as $Pitch)
                                                <option value="{{$Pitch->id}}">
                                                    {{$Pitch->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box">
                                        <p>Type pitch <span>*</span></p>
                                        <select name="pitchType_id" class="input" required>
                                            @foreach($pitchTypes as $pitchType)
                                                <option value="{{$pitchType->id}}">
                                                    {{ $pitchType->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="box">--}}
{{--                                        <p>Service <span>*</span></p>--}}
{{--                                        <select name="Service_id" class="input" required>--}}
{{--                                            @foreach($Services as $Service)--}}
{{--                                                <option value="{{$Service->id}}">--}}
{{--                                                    {{ $Service->name }}--}}
{{--                                                </option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="col-md-12">
                                    <div class="box">
                                        <p>Payment Method <span>*</span></p>
                                        <select name="paymentmethod" class="input" required>
                                            <option value="0" selected>Chưa Thanh Toán</option>
                                            <option value="1">Tiền Mặt</option>
                                            <option value="2">Tài Khoản</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" style="width: 150px; text-align: center;" id="buyNowButton">Đặt sân</button>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- end our_room -->

<!--  footer -->
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class=" col-md-4">
                    <h3>Contact US</h3>
                    <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> +01 1234569540</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> demo@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Menu Link</h3>
                    <ul class="link_menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="about.html"> about</a></li>
                        <li class="active"><a href="room.html">Our Room</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>News letter</h3>
                    <form class="bottom_form">
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                    </form>
                    <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <p>
                            © 2019 All Rights Reserved. Design by <a href="https://html.design/"> Free Html Templates</a>
                            <br><br>
                            Distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
