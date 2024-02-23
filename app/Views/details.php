<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>Book Cycle</title>
    <meta name="description" content="">
    <meta name="author" content="WebThemez">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
    <script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.0.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?=base_url()?>\public\css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>\public\css/isotope.css" media="screen" />
    <link rel="stylesheet" href="<?=base_url()?>\public\js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link href="<?=base_url()?>\public\css/animate.css" rel="stylesheet" media="screen">
    <!-- Owl Carousel Assets -->
    <link href="<?=base_url()?>\public\js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>\public\css\styles.css?v=6" />
    <!-- Font Awesome -->
    <link href="<?=base_url()?>\public\font/css/font-awesome.min.css" rel="stylesheet">

</head>

<div class="container">
    <b></b> 
    <div class="row feature design">
        <div style="display: flex; flex-direction:row; justify-content: center"> <div style="font-weight: bold;font-size: 3rem;" class="levelx features-paddxx"> LEVEL <?php echo (intval($key) + 1)?> - <?php echo $level["header_text"]?> </div>
        </div>
        <p class="features-padd" ><?php echo $level["factors"]["remark1"]?></p>
        <div class="three-column">
            <div class="four column flex-item">
                <h3 class="features-padd"> <?php echo $level["header_text"]?></h3>
                <p class="features-padd" style="text-align: justify"><?php echo $level["factors"]["long1"]?> </p>
                <p class="features-padd" style="text-align: justify"><?php echo $level["factors"]["long2"]?> </p>
            </div>
            <div class="four column flex-item" style="margin-top:4rem; margin-left:2rem; margin-right:-1rem">

                <?php for($i=0;$i< count($level['positives']);$i++){?>
                    <div style="display: flex; flex-direction:row">
                        <!--for in range -->
                        <span class="dot green" style="color:green;"></span><p style="padding-left:1rem"> <?php echo $level['positives'][$i]?> </p></div>
                <?php } ?>

                <?php for($i=0;$i< count($level['negatives']);$i++){?>
                    <div style="display: flex; flex-direction:row">
                        <!--for in range -->
                        <span class="dot red" style="color:green;"></span><p style="padding-left:1rem"> <?php echo $level['negatives'][$i]?> </p></div>
                <?php } ?>
            </div>
            <div class="four column flex-item" style="margin-top:4rem;">
                <div class="pbar";>
                    <div style="display:flex; flex-content:row; align-items:center;">
                        <div style="font-size:1.8rem; font-weight: bold">Ease for students</div>
                    </div>
                    <div class="progress">
                        <span class="" style="width:<?php echo $level["ease"]?>%"><?php echo $level["ease"]?>%</span>
                    </div>
                </div>

                <div class="pbar" style="";>
                    <div style="display:flex; flex-content:row; align-items:left">
                        <div style="font-size:1.8rem; font-weight: bold; text-align:left">Work for Cudi</div>
                    </div>
                    <div class="progress">
                        <span class="" style="width:<?php echo $level["work"]?>%"><?php echo $level["work"]?>%</span>
                    </div>
                </div>
                <div class="pbar";>
                    <div style="display:flex; flex-content:row; align-items:center;">
                        <div style="font-size:1.8rem; font-weight: bold">Communication </div>
                    </div>
                    <div class="progress">
                        <span class="" style="width:<?php echo $level["comm"]?>%"><?php echo $level["comm"]?>%</span>
                    </div>
                </div>
                <div class="pbar";>
                    <div style="display:flex; flex-content:row; align-items:center;">
                        <div style="font-size:1.8rem; font-weight: bold">Second hand </div>
                    </div>
                    <div class="progress">
                        <span class="" style="width:<?php echo $level["secondhand"]?>%"><?php echo $level["secondhand"]?>%</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <h1 style="text-align: center"></h1>
        <hr class="thick-blue">
        <div style="display: flex; flex-direction:row; justify-content: center"> <div style="font-weight: bold;font-size: 3rem;" class="level">Important factors applied</div>
        </div>
        <p style="text-align: justify"> We discuss each factor applied to this system. </p>
        <div class="centerDiv factor-box">
            <div class="twelve column ">
                <h3> Hand-in period</h3>
                <p style="text-align: justify"> <?php $this->factors = $level["factors"];
                echo $this->factors["handin1"]?> </p>
            </div>
            <div style="margin-left:5rem; margin-right:5rem">
                <i class="fa fa-clock-o fa-5x" style="color:#426e70"></i>
            </div>

        </div>
        <div class="centerDiv factor-box">
            <div class="twelve column ">
                <h3> Ease of buying</h3>
                <p style="text-align: justify"> <?php echo $this->factors["ease1"] ?>
                    <br> <?php echo $this->factors["ease2"]?> </p>
            </div>
            <div style="margin-left:5rem; margin-right:5rem">
                <i class="fa fa-shopping-cart fa-5x" style="color:#426e70"></i>
            </div>

        </div>
        <div class="centerDiv factor-box">
            <div class="twelve column ">
                <h3> Communication</h3>
                <p style="text-align: justify"> <?php echo $this->factors["commu1"]?>
                    <br> <?php echo $this->factors["commu2"]?>   </p>
            </div>
            <div style="margin-left:5rem; margin-right:5rem">
                <i class="fa fa-bullhorn fa-5x" style="color:#426e70"></i>
            </div>

        </div>
        <div class="centerDiv factor-box">
            <div class="twelve column ">
                <h3> Price flexibility </h3>
                <p style="text-align: justify"> <?php echo $this->factors["price1"]?>  </p>
            </div>
            <div style="margin-left:5rem; margin-right:5rem">
                <i class="fa fa-handshake-o fa-5x" style="color:#426e70"></i>
            </div>

        </div>
        <div class="centerDiv factor-box">
            <div class="twelve column ">
                <h3> Filtering required </h3>
                <p style="text-align: justify"> <?php echo $this->factors["filter1"]?></p>
            </div>
            <div style="margin-left:5rem; margin-right:5rem">
                <i class="fa fa-check-circle-o fa-5x" style="color:#426e70"></i>
            </div>

        </div>
        <div class="centerDiv factor-box">
            <div class="twelve column ">
                <h3> Storage </h3>
                <p style="text-align: justify"> <?php echo $this->factors["storage1"]?></p>
            </div>
            <div style="margin-left:5rem; margin-right:5rem">
                <i class="fa fa-archive fa-5x" style="color:#426e70"></i>
            </div>

        </div>
        <div class="centerDiv factor-box">
            <div class="twelve column ">
                <h3> Transactions </h3>
                <p style="text-align: justify">  <?php echo $this->factors["trans1"]?>  </p>
            </div>
            <div style="margin-left:5rem; margin-right:5rem">
                <i class="fa fa-credit-card fa-5x" style="color:#426e70"></i>
            </div>

        </div>

        <div class="centerDiv factor-box">
            <div class="twelve column ">
                <h3> Commission </h3>
                <p style="text-align: justify">  <?php echo $this->factors["commission1"]?>   </p>
            </div>
            <div style="margin-left:5rem; margin-right:5rem">
                <i class="fa fa-euro fa-5x" style="color:#426e70"></i>
            </div>

        </div>

        <div class="centerDiv factor-box">
            <div class="twelve column ">
                <h3> Financial risk </h3>
                <p style="text-align: justify">  <?php echo $this->factors["risk1"]?>   </p>
            </div>
            <div style="margin-left:5rem; margin-right:5rem">
                <i class="fa fa-balance-scale fa-5x" style="color:#426e70"></i>
            </div>

        </div>
        <br>
        <br>
    </div>
    <hr class="thick-blue" >

</div>
