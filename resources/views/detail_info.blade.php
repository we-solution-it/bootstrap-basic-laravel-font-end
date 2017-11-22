<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/thumbnail-gallery.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Latest compiled and minified CSS -->
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" media="all" />--}}

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .hide-bullets {
            list-style:none;
            margin-left: -40px;
            margin-top:20px;
        }
    </style>
    <script type="text/javascript">
        jQuery(document).ready(function($) {

            $('#myCarousel').carousel({
                interval: 5000
            });

            $('#carousel-text').html($('#slide-content-0').html());

            //Handles the carousel thumbnails
            $('[id^=carousel-selector-]').click( function(){
                var id = this.id.substr(this.id.lastIndexOf("-") + 1);
                var id = parseInt(id);
                $('#myCarousel').carousel(id);
            });


            // When the carousel slides, auto update the text
            $('#myCarousel').on('slid.bs.carousel', function (e) {
                var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
            });
        });
    </script>
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>


    </div>
</nav>
<!-- Navigation2 -->
<!--
 -->
<!-- Just an image -->
<nav class="navbar navbar-light bg-faded" style="background-color:blue;padding: 15px;">
    <a class="navbar-brand" href="#">
        <img class="img-fluid img-thumbnail" src="images/smallmenu.png" alt="">
    </a>
    <a class="navbar-brand" href="#">
        <img class="img-fluid img-thumbnail" src="images/smallmenu.png" alt="">
    </a>
    <a class="navbar-brand" href="#">
        <img class="img-fluid img-thumbnail" src="images/smallmenu.png" alt="">
    </a>
    <a class="navbar-brand" href="#">
        <img class="img-fluid img-thumbnail" src="images/smallmenu.png" alt="">
    </a> <a class="navbar-brand" href="#">
        <img class="img-fluid img-thumbnail" src="images/smallmenu.png" alt="">
    </a>
    <a class="navbar-brand" href="#">
        <img class="img-fluid img-thumbnail" src="images/smallmenu.png" alt="">
    </a> <a class="navbar-brand" href="#">
        <img class="img-fluid img-thumbnail" src="images/smallmenu.png" alt="">
    </a>
    <a class="navbar-brand" href="#">
        <img class="img-fluid img-thumbnail" src="images/smallmenu.png" alt="">
    </a>
</nav>

<!-- Page Content -->
<div class="container">
    <div id="main_area">
        <!-- Slider -->
        <div class="row">
            <div class="col-xs-12" id="slider">
                <!-- Top part of the slider -->
                <div class="row">
                    <div class="col-sm-8" id="carousel-bounding-box">
                        <div class="carousel slide" id="myCarousel">
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                <div class="active item" data-slide-number="0">
                                   {{-- <img src="rent.jpg"></div>--}}

                                <div class="item" data-slide-number="1">
                                   {{-- <img src="home.jpg"></div>--}}

                                <div class="item" data-slide-number="2">
                                    {{--<img src="real_estate.jpg"></div>--}}

                                <div class="item" data-slide-number="3">
                                    <img src="http://placehold.it/770x300&text=four"></div>

                                <div class="item" data-slide-number="4">
                                    <img src="http://placehold.it/770x300&text=five"></div>

                                <div class="item" data-slide-number="5">
                                    <img src="http://placehold.it/770x300&text=six"></div>
                            </div><!-- Carousel nav -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4" id="carousel-text"></div>

                    <div id="slide-content" style="display: none;">
                        <div id="slide-content-0">
                            <h2>Slider One</h2>
                            <p>Lorem Ipsum Dolor</p>
                            <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                        </div>

                        <div id="slide-content-1">
                            <h2>Slider Two</h2>
                            <p>Lorem Ipsum Dolor</p>
                            <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                        </div>

                        <div id="slide-content-2">
                            <h2>Slider Three</h2>
                            <p>Lorem Ipsum Dolor</p>
                            <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                        </div>

                        <div id="slide-content-3">
                            <h2>Slider Four</h2>
                            <p>Lorem Ipsum Dolor</p>
                            <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                        </div>

                        <div id="slide-content-4">
                            <h2>Slider Five</h2>
                            <p>Lorem Ipsum Dolor</p>
                            <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                        </div>

                        <div id="slide-content-5">
                            <h2>Slider Six</h2>
                            <p>Lorem Ipsum Dolor</p>
                            <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/Slider-->

        <div class="row hidden-xs" id="slider-thumbs">
            <!-- Bottom switcher of slider -->
            <ul class="hide-bullets">
                <li class="col-sm-2">
                    {{--<a class="thumbnail" id="carousel-selector-0"><img src="rent.jpg"></a>--}}
                </li>

                <li class="col-sm-2">
                    <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/170x100&text=two"></a>
                </li>

                <li class="col-sm-2">
                    <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/170x100&text=three"></a>
                </li>

                <li class="col-sm-2">
                    <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/170x100&text=four"></a>
                </li>

                <li class="col-sm-2">
                    <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/170x100&text=five"></a>
                </li>

                <li class="col-sm-2">
                    <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/170x100&text=six"></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
    <!-- /.container -->
</footer>


<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/jquery-gmaps-latlon-picker.js"></script>
</body>
</html>
