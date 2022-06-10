<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- BOOTSTRAP CSS  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- FONT AWESOME  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <!-- CUSTOM CSS  -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- HEADER SECTION-->
            <div class="header">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('images/img.jpg')}}" id="headerImg" alt="">
                    </div>
                    <div class="col-md-4">
                        <br><br><br>
                        <p class="hello">HELLO!</p>
                        <p class="itme">IT'S ME</p>
                        <p class="hc">THE HAPPY CODER</p>
                        <br>
                        <a href="{{url('/post')}}">
                            <button class="btn btn-info">
                                <i class="fa fa-plus-circle"></i>
                                Explore  Blogs
                            </button>
                        </a>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
            </div>
            <!-- NAVBAR SEXTION -->
            <div class="position-sticky" id="navbar">
                <div class="row">
                    <div class="col-md-9">
                        <a  href="{{url('/')}}">HOME</a>
                        <a  href="{{url('/post')}}">BLOGS</a>
                    </div>
                    <div class="col-md-3">
                        @if (Auth::check())
                        <a href="">{{ Auth::user()->name }}</a>
                        <a href="" onclick="event.preventDefault(); if(confirm('Are you sure you want to logout?'))
                        document.getElementById('logout-form').submit()">Logout</a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                    </div>
                </div>
               
               
            </div>
            @yield('ui-content')
            <!-- FOOTER SECTION  -->
            <div class="footer">
                <div class="row">

                    <div class="col-sm-12 col-md-4 mb-4">
                        <h5>ABOUT THIS WEBSITE</h5>
                        <p style="text-align: justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sequi, architecto laborum
                            excepturi molestiae dolore? Beatae distinctio.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sequi, architecto laborum
                            excepturi molestiae dolore? Beatae distinctio.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sequi, architecto laborum
                            excepturi molestiae dolore? Beatae distinctio.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sequi, architecto laborum
                            excepturi molestiae dolore? Beatae distinctio.
                        </p>
                    </div>

                    <div class="col-sm-12 col-md-4 mb-4">
                        <h5>CONTACT INFO</h5>
                        <span> <i class="fas fa-mobile-alt"></i> 097976654432 </span> <br>
                        <span> <i class="far fa-envelope"></i> myblog@example.com </span>
                    </div>

                    <div class="col-sm-12 col-md-4">
                        <h5>FOLLOW ME ON</h5>
                        <a href="" target="_blank">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="" target="_blank">
                            <i class="fab fa-instagram-square"></i>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="">
                            <i class="fab fa-twitter-square"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- CUSTOMS JS  -->
    <script src="{{asset('js/main.js')}}"></script>
    <!-- BOOTSTRAP JS  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>
</html>
