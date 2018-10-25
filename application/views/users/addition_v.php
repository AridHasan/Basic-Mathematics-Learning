<?php
?>
<html>
    <head>
        <title>Addition | Math Education</title>
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
        <script>
            var fnum = parseInt("<?php echo 3; ?>");
            var lnum = parseInt("<?php echo 3; ?>");
            var sum = 0;
            function count_num(i) {
                if(i<fnum){
                    var im = 'image_'+ i;
                    var num = 'num_'+i;
                    if(i != 0) {
                        var p_num = 'num_' + (i - 1);
                        document.getElementById(p_num).innerText = "";
                    }
                    //document.getElementById(im).removeAttribute('src');
                    document.getElementById(num).innerText = i+1;
                    setTimeout(function () {
                        count_num(i+1);
                    },1500);
                }else {
                    document.getElementById("num_"+(fnum-1)).innerText='';
                    if(i< (fnum + lnum)){
                        var im = 'image2_'+ (i-fnum);
                        var num = 'num2_'+(i-fnum);
                        if((i-fnum) != 0) {
                            var p_num = 'num2_' + ((i-fnum) - 1);
                            document.getElementById(p_num).innerText = "";
                        }
                        //sum += 1;
                        //document.getElementById(im).removeAttribute('src');
                        document.getElementById(num).innerText = i+1;
                        setTimeout(function () {
                            count_num(i+1);
                        },1500);
                    }
                }
                setTimeout(function () {
                    var ids = "num2_"+(lnum -1);
                    document.getElementById(ids).innerText = '';
                },2000);
            }

            $(document).ready(function () {
                $('#practice_section').attr("hidden",true);
                $('#practice').click(function () {
                    $('#practice').attr("hidden",true);
                    $('#practice_section').attr("hidden",false);
                });
                $("#show_cal").click(function () {
                    document.getElementById("show_cal").innerText = 'See Again';
                    document.getElementById("summation").innerText = '';
                    count_num(0);
                    document.getElementById("summation").innerText = fnum + lnum;
                });
            });
        </script>
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
        <div class="row" style="margin-top: 35px; margin-bottom: 35px;">
            <div class="col-sm-10 offset-sm-1" style="margin-top: 20px; box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;">
                <div class="col-sm-10 offset-sm-1" style="margin-top: 20px; margin-bottom: 20px;">
                    <div class="col-sm-12" id="canvas-main">
                        <div class="col-sm-12" style="float: left;">
                            <h2 class="text-primary text-center">Lesson</h2>
                            <table class="table-borderless">
                                <tr>
                                    <?php
                                    for($i=0;$i<3;$i++){
                                        ?>
                                        <td><img class="img-fluid" id="image_<?php echo $i;?>" style="margin-right: 20px;" src="<?php echo base_url();?>images/line.png"></td>
                                    <?php } ?>
                                    <td><p class="card-title" style="font-size: 50px; margin-right: 20px;">+</p></td>
                                    <?php
                                    for($i=0;$i<3;$i++){
                                        ?>
                                        <td><img class="img-fluid" id="image2_<?php echo $i;?>" style="margin-right: 20px;" src="<?php echo base_url();?>images/line.png"></td>
                                    <?php } ?>
                                    <td><p class="card-title" style="font-size: 50px; margin-right: 20px; float: left;">=</p></td>
                                    <td><p class="card-title" id="summation" style="font-size: 50px; margin-right: 20px; float: left;">6</p></td>
                                </tr>
                                <tr>
                                    <?php
                                    for($i=0;$i<3;$i++){
                                        ?>
                                        <td><p class="card-title" id="num_<?php echo $i;?>" style="font-size: 50px; margin-right: 20px;"></p></td>
                                    <?php } ?>
                                    <td></td>
                                    <?php
                                    for($i=0;$i<3;$i++){
                                        ?>
                                        <td><p class="card-title" id="num2_<?php echo $i;?>" style="font-size: 50px; margin-right: 20px;"></p></td>
                                    <?php } ?>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                            <div id="none"></div>
                            <div class="text-right" style="margin-bottom: 20px;">
                                <button class="btn btn-success" type="submit" id="show_cal">Learn</button>
                                <button class="btn btn-info" type="submit" id="practice">Practice</button>
                            </div>
                            <div id="practice_section">
                                <hr/>
                                <h2 class="text-primary text-center">Exercise</h2>
                                <table class="table-borderless">
                                    <tr>
                                        <?php
                                        for($i=0;$i<4;$i++){
                                            ?>
                                            <td><img class="img-fluid" style="margin-right: 20px;" src="<?php echo base_url();?>images/line.png"></td>
                                        <?php } ?>
                                        <td><p class="card-title" style="font-size: 50px; margin-right: 20px;">+</p></td>
                                        <?php
                                        for($i=0;$i<5;$i++){
                                            ?>
                                            <td><img class="img-fluid" style="margin-right: 20px;" src="<?php echo base_url();?>images/line.png"></td>
                                        <?php } ?>
                                        <td><p class="card-title" style="font-size: 50px; margin-right: 20px; float: left;">=</p></td>
                                        <td><input type="text" class="form-control text-center" id="ex_sum" style="font-size: 50px; width: 100px;"></td>
                                    </tr>
                                    <tr>
                                        <?php
                                        for($i=0;$i<4;$i++){
                                            ?>
                                            <td><p class="card-title" style="font-size: 50px; margin-right: 20px;"></p></td>
                                        <?php } ?>
                                        <td></td>
                                        <?php
                                        for($i=0;$i<5;$i++){
                                            ?>
                                            <td><p class="card-title" style="font-size: 50px; margin-right: 20px;"></p></td>
                                        <?php } ?>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                                <div id="none"></div>
                                <div class="text-right" style="margin-bottom: 20px;">
                                    <button class="btn btn-success" type="submit" id="show_cal">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            $this->load->view('footer');
        ?>
