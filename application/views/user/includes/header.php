

<!doctype html>

<html>





<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <title>Primeclient </title>

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url().'assets/user/images/favicon.png'; ?>" sizes="16x16"/>

    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/font-awesome.css">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/material-design-iconic-font.css">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/bootstrap.css">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/animate.css">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/layout.css">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/components.css">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/widgets.css">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/plugins.css">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/pages.css">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/bootstrap-extend.css">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/common.css">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/responsive.css">

    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">

 <link href="<?php echo base_url(); ?>assets/js/crop/croppie.css" rel="stylesheet">

<style type="text/css">

    /* USER PROFILE PAGE */

 .card {

    margin-top: 20px;

    padding: 30px;

    background-color: rgba(214, 224, 226, 0.2);

    -webkit-border-top-left-radius:5px;

    -moz-border-top-left-radius:5px;

    border-top-left-radius:5px;

    -webkit-border-top-right-radius:5px;

    -moz-border-top-right-radius:5px;

    border-top-right-radius:5px;

    -webkit-box-sizing: border-box;

    -moz-box-sizing: border-box;

    box-sizing: border-box;

}

.card.hovercard {

    position: relative;

    padding-top: 0;

    overflow: hidden;

    text-align: center;

    background-color: #fff;

    background-color: rgba(255, 255, 255, 1);

}

.card.hovercard .card-background {

    height: 130px;

}

.card-background img {

    -webkit-filter: blur(25px);

    -moz-filter: blur(25px);

    -o-filter: blur(25px);

    -ms-filter: blur(25px);

    filter: blur(25px);

    margin-left: -100px;

    margin-top: -200px;

    min-width: 130%;

}

.card.hovercard .useravatar {

    position: absolute;

    top: 15px;

    left: 0;

    right: 0;

}

.card.hovercard .useravatar img {

    width: 100px;

    height: 100px;

    max-width: 100px;

    max-height: 100px;

    -webkit-border-radius: 50%;

    -moz-border-radius: 50%;

    border-radius: 50%;

    border: 5px solid rgba(255, 255, 255, 0.5);

}

.card.hovercard .card-info {

    position: absolute;

    bottom: 14px;

    left: 0;

    right: 0;

}

.card.hovercard .card-info .card-title {

    padding:0 5px;

    font-size: 20px;

    line-height: 1;

    color: #262626;

    background-color: rgba(255, 255, 255, 0.1);

    -webkit-border-radius: 4px;

    -moz-border-radius: 4px;

    border-radius: 4px;

}

.card.hovercard .card-info {

    overflow: hidden;

    font-size: 12px;

    line-height: 20px;

    color: #737373;

    text-overflow: ellipsis;

}

.card.hovercard .bottom {

    padding: 0 20px;

    margin-bottom: 17px;

}

.btn-pref .btn {

    -webkit-border-radius:0 !important;

}



.cdm {
      position: absolute;
    top: 0%;
    left: 1px;
    width: 150px;
    height: 1px;
    text-align: center;
    border-radius: 50%;
    color: #fff;
    opacity: 0;
    padding: 75px 0;
}
.cdm:hover {
    background: rgba(187, 0, 117, 0.3);
    opacity: 1;
}
#profile-image img {
    margin: 2px;
    border: 2px solid #9e016f;
    border-radius: 50%;
    width: 150px;
    height: 150px;
    object-fit: cover;
}
#profile-image {
    width: 21%;    z-index: 999;
    float: right;
    margin: 50px 190px 0px 0px;
}
.sp-bd-light{    display: initial;
    position: relative;
    top: -5px;
    left: 5px;
    font-size: 10px;}
</style>

</head>

<!-- Start of nytelecon Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=0f74c43b-e51c-4b5a-b3e0-1cf161760d06"> </script>
<!-- End of nytelecon Zendesk Widget script -->
<!-- <script type="text/javascript">
  window.zESettings = {
    webWidget: {
      color: { theme: '#78a300' }
    }
  };
</script> -->
<script type="text/javascript">
  window.zESettings = {
    webWidget: {
      launcher: {
        chatLabel: {
          '*': 'Live Chat'
        },
        mobile: {
          labelVisible: true
        }
      }
    }
  };
</script>
<body class="overlay-leftbar">

<!--Topbar Start Here-->

<header class="topbar clearfix">

    <div class="container">

    

    <!--Topbar Left Branding With Logo Start-->

    <div class="topbar-left pull-left">

        <div class="clearfix">

            <ul class="left-branding pull-left clickablemenu ttmenu dark-style menu-color-gradient">

                <li>

                    <div class="logo">

                        <a href="<?php echo base_url() ?>home" title="Admin Template"><img src="<?php echo base_url() ?>assets/user/images/logo.png" alt="logo"></a>

                    </div>

                </li>

            </ul>

            <ul class="branding-right pull-right">

                <li><a href="#" class="btn-mobile-search btn-top-search"><i class="zmdi zmdi-search"></i></a></li>

                <li><a href="#" class="btn-mobile-bar"><i class="zmdi zmdi-menu"></i></a></li>

            </ul>

        </div>

    </div>

    <div class="topbar-right pull-right">

        <div class="clearfix">

            <!--Mobile View Leftbar Toggle-->

            <ul class="left-bar-switch pull-left">

                <li><span class="left-toggle-switch"><i class="zmdi zmdi-menu"></i>User</span></li>

            </ul>

            <ul class="pull-right top-right-icons">

                <li><a href="#"></a><a href="<?php echo base_url() ?>home">Home</a>

                </li>

                <li>

                    <a href="#"></a><a href="<?php echo base_url() ?>transaction">Transactions</a>

                </li>

                <li>
                    <a href="#"></a><a href="<?php echo base_url() ?>inbox">Inbox<span class="badge badge-light sp-bd-light" id="inboxCount"></span></a>

                </li>

                <li>

                    <a href="#"></a><a href="<?php echo base_url() ?>user">Profile</a>

                </li>

            </ul>

        </div>

    </div>

    <!--Topbar Right End-->

    </div>

</header>   