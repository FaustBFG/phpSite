<?php
include_once ('config.php');
?>

<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Samples</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700|Roboto:300,400' rel='stylesheet'
          type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style>
        * {box-sizing: border-box;}

        /*.container {
            position: relative;
            width: 50%;
            max-width: 300px;
        }*/

        .image {
            display: block;
            width: 100%;
            height: auto;
        }

        .overlay {
            position: absolute;
            bottom: 0;
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.5); /* Black see-through */
            color: #f1f1f1;
            width: 100%;
            transition: .5s ease;
            opacity:0;
            color: white;
            font-size: 20px;
            padding: 20px;
            text-align: center;
        }

        .container:hover .overlay {
            opacity: 1;
        }
        img {
            cursor: zoom-in;
        }
    </style>

</head>
<body>
<div class="box-wrap">
<div class="navbar-header">
    <ul class="nav navbar-nav navbar-right">
        <li><a class="glyphicon glyphicon-log-in" href="register.php" style="color: #0d738e; font-size: smaller">Signup</a></li>
        <li><a class="glyphicon glyphicon-log-in" href="login.php" style="color: #0d738e; font-size: smaller">Login</a></li>
    </ul>
</div>
</div>
<div class="box-wrap">
    <header role="banner" id="fh5co-header">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="row">
                    <div class="col-sm-1">
                        <div class="fh5co-navbar-brand">
                            <a class="fh5co-logo" href="index.php"><img src="images/logo.png" alt="Closest Logo"
                                                                         style="width:100%;"></a>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <ul class="nav text-center">
                            <li class="active"><a href="index.php"><span>Work</span></a></li>
                            <li><a href="inside.html">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="social">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- END: header -->
    <div></div>
    <section id="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <div class="intro animate-box">
                        <h2>We work with natural leather and create various leather accessories according to our
                            customer's requirements</h2>
                    </div>
                </div>
            </div>
            <div>
    </section>

    <div class="modal fade" id="enlargeImageModal" tabindex="-1" role="dialog" aria-labelledby="enlargeImageModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <img src="" class="enlargeImageModalSource" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
    <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12" >
        <h1 class="gallery-title" align="center">Gallery</h1>
    </div>

    <br/>
    <div class="intro animate-box">
        <div class="container">
            <?php
            $i=1;
            $sql="SELECT * FROM `table_product`";
            $qry=mysqli_query($link,$sql) or die(mysqli_error($link));

            while($row=mysqli_fetch_array($qry)) {

                ?>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter braslets">
                    <img class="img-rounded img-responsive" src="images/picture/<?php echo $row['product_picture']; ?>">
                </div>
                <?php
                $i++;
            }
            ?>
        </div>
    </div>
</div>
<footer id="footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center ">
                <div class="footer-widget border">
                    <p class="pull-left">
                        <small>&copy; LANDA All Rights Reserved.</small>
                    </p>
                    <p class="pull-right">
                        <small> Designed by LANDA</small>
                    </p>

                </div>
            </div>
        </div>
    </div>
</footer>

<!-- END: box-wrap -->

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>

<!-- Main JS (Do not remove) -->
<script src="js/main.js"></script>
<script src="js/filter.js"></script>
<script src="js/show.js"></script>
</body>

</html>
