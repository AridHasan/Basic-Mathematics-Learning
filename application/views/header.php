<?php
?>
<html>
    <head>
        <title>Home | Math Education</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <script src="<?php echo base_url('resources/js/jquery.js'); ?>" type="text/javascript"></script>
        <link href="<?php echo base_url('resources/css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet" />
        <link href="<?php echo base_url('resources/fontA/css/font-awesome.css'); ?>" type="text/css" rel="stylesheet" />
        <script src="<?php echo base_url('resources/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('resources/js/bootstrap.bundle.min.js'); ?>" type="text/javascript"></script>
        <style>
            *body{
                font-family: "Times New Roman", "Agency FB", "SansSerif";
            }
            .row{
                padding: 0;
                margin: 0;
            }
            .bg-black{
                background-color:#000!important
            }
            .navbar-custom{
                padding-top:1rem;
                padding-bottom:1rem;
                background-color:rgba(0,0,0,.7);
            }
            .navbar-custom .navbar-brand{
                text-transform:uppercase;
                font-size:1rem;
                letter-spacing:.1rem;
                font-weight:700;
            }
            .navbar-custom .navbar-nav .nav-item .nav-link{
                text-transform:uppercase;
                font-size:.8rem;
                font-weight:700;
                letter-spacing:.1rem;
            }
            #line1{
                width: 1px; /* Line width */
                background-color: black; /* Line color */
                height: 100%;
            }
            #line2{
                width: 1px; /* Line width */
                background-color: red; /* Line color */
                height: 100%;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom"> <!-- not fixed-top -->
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">Math Education</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" id="home" href="<?php echo base_url(); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="about" href="<?php echo base_url(); ?>about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="home" href="<?php echo base_url(); ?>Addition">Addition</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="about" href="<?php echo base_url(); ?>Subtraction">Subtraction</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="home" href="<?php echo base_url(); ?>Multiplication">Multiplication</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="about" href="<?php echo base_url(); ?>Division">Division</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>