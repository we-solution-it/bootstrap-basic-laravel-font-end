<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
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
    <style>
        /**/
        /* If the map DIV doesn't have a size set up, it won't appear on the page */
        .gllpMap	{ width: 100%; height: 250px; }
        html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td { margin: 0px; padding: 0px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 100%; font-family: inherit; vertical-align: baseline; }
        form	{ margin: 0px; padding: 0px; }
        table   { border-collapse: collapse; border-spacing: 0px; }
        caption, th, td {text-align: left; font-weight: normal; }
        blockquote:before, blockquote:after, q:before, q:after { content: ""; }
        blockquote, q { quotes: "" ""; }

        /*BODY    { margin: 20px; padding: 20px; color: #000; font-family: Helvetica, Arial, Verdana, sans-serif; font-size: 14.0px; }*/

        H1		{ margin: 20px 0; font-size: 3em; }
        H2		{ margin: 40px 0 20px 0; font-size: 1.8em; }

        UL 		{ margin: 0 20px; }
        UL LI	{ margin: 5px 0; }

        .gllpLatlonPicker	{ margin: 20px 0; }

        .code			{ margin: 20px 0; font-size: 0.9em; width: 1600px; font-family: "Monofur", courier; background-color: #555; padding: 15px; box-shadow: #f6f6f6 1px 1px 3px; color: #999; }
        .description	{ margin: 20px 0; line-height: 1.2em; }
        /*!
         * Start Bootstrap - Thumbnail Gallery (https://startbootstrap.com/template-overviews/thumbnail-gallery)
         * Copyright 2013-2017 Start Bootstrap
         * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-thumbnail-gallery/blob/master/LICENSE)
         */

        body {
            padding-top: 54px;
        }

        @media (min-width: 992px) {
            body {
                padding-top: 56px;
            }
        }

    </style>
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

    <h1 class="my-4 text-center text-lg-center">Thumbnail Gallery</h1>

    <div class="row text-center text-lg-left">
        <!-- model detail -->
        <div class="col-lg-2 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100" style="background-color:orange">
                <img class="img-fluid img-thumbnail" src="images/smallmenu.png" alt="">
            </a>
        </div>
        <div class="col-lg-10 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100" style="text-decoration:none; background-color: #2ab27b">
                <p>I am hereI am hereI am hereI am hereI am hereI am hereI am hereI am am hereI am hereI am hereI   am hereI am hereI am hereI am hereI am hereI am hereI am here
                    am hereI am hereI am hereI am hereI am am hereII am hereI am hereI am hereI am hereI am hereI am hereI am hereI am am hereI am hereI am hereI am hereI am hereI am hereI am hereI am am hereI
                    am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am am hereI am hereI am hereI am hereI am hereI am hereI am hereI am am hereI
                </p>
            </a>
        </div>
        {{----}}
        <div class="col-lg-2 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100" style="background-color:green">
                <img class="img-fluid img-thumbnail" src="images/smallmenu.png" alt="">
            </a>
        </div>
        <div class="col-lg-10 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100" style="text-decoration:none; background-color: #6f42c1">
                <p>I am hereI am hereI am hereI am hereI am hereI am hereI am hereI am am hereI am hereI am hereI   am hereI am hereI am hereI am hereI am hereI am hereI am here
                    am hereI am hereI am hereI am hereI am am hereII am hereI am hereI am hereI am hereI am hereI am hereI am hereI am am hereI am hereI am hereI am hereI am hereI am hereI am hereI am am hereI
                    am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am am hereI am hereI am hereI am hereI am hereI am hereI am hereI am am hereI
                </p>
            </a>
        </div>
        {{----}}
        <div class="col-lg-2 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100" style="background-color:#856404">
                <img class="img-fluid img-thumbnail" src="images/smallmenu.png" alt="">
            </a>
        </div>
        <div class="col-lg-10 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100" style="text-decoration:none; background-color: #2ab27b">
                <p>I am hereI am hereI am hereI am hereI am hereI am hereI am hereI am am hereI am hereI am hereI   am hereI am hereI am hereI am hereI am hereI am hereI am here
                    am hereI am hereI am hereI am hereI am am hereII am hereI am hereI am hereI am hereI am hereI am hereI am hereI am am hereI am hereI am hereI am hereI am hereI am hereI am hereI am am hereI
                    am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am am hereI am hereI am hereI am hereI am hereI am hereI am hereI am am hereI
                </p>
            </a>
        </div>
        {{----}}
        <div class="col-lg-2 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100" style="background-color:yellow;">
                <img class="img-fluid img-thumbnail" src="images/smallmenu.png" alt="">
            </a>
        </div>
        <div class="col-lg-10 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100" style="text-decoration:none; background-color: #6f42c1">
                <p>I am hereI am hereI am hereI am hereI am hereI am hereI am hereI am am hereI am hereI am hereI   am hereI am hereI am hereI am hereI am hereI am hereI am here
                    am hereI am hereI am hereI am hereI am am hereII am hereI am hereI am hereI am hereI am hereI am hereI am hereI am am hereI am hereI am hereI am hereI am hereI am hereI am hereI am am hereI
                    am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am hereI am am hereI am hereI am hereI am hereI am hereI am hereI am hereI am am hereI
                </p>
            </a>
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


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
