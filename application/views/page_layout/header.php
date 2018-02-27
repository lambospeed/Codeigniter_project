<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>freelance Guru</title>
    <link href="https://fonts.googleapis.com/css?family=Bitter:400,700%7COpen+Sans:400,600i,700,800%7CRaleway:400,500i,700,800,900%7CPoppins:300,400,500,600,700"
        rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo site_url()?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo site_url()?>assets/css/flag-icon.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo site_url()?>assets/css/plugin.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo site_url()?>assets/css/custom.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo site_url()?>assets/css/colors.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo site_url()?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo site_url()?>assets/css/easy-autocomplete.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo site_url()?>assets/css/easy-autocomplete.themes.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo site_url()?>assets/css/responsive.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo site_url()?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link rel="shortcut icon" href="<?php echo site_url()?>assets/img/favicon.png" />
    <link rel="icon" href="<?php echo site_url()?>assets/img/favicon.png" />
    <link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/login_sign/style.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
      
    <style type="text/css">
        .edit_btn
        {
            width:80px;
            float:right;
        }
        .save_btn 
        {
            width:80px;
            float:right;
        }
        .field 
        {
            width:100%;
        }
    </style>
    <?php if ($this->router->fetch_class() == 'postjob'):?>
    <style type="text/css">
        #asd> li> label {
            margin-left:22px;
            vertical-align: middle;
            padding-top:13px;
        }
        .a {
        width:20px;
        height: 20px;
        vertical-align: middle;
        }
        .b {
        width:20px;
        height: 20px;
        vertical-align: middle;
        }
        #asd> li {
            padding-left:10px;
        }

        .skill1 {
            font-size: 16px;
            border:1px #222222 solid;
            border-radius:2px;
            margin:2px;
            padding:3px;
        }
        .skill1 > a {
            font-size:16px;
        }

        ul.scroll-menu {
        position: relative;
        /*display: inherit !important;*/
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -moz-overflow-scrolling: touch;
        -ms-overflow-scrolling: touch;
        -o-overflow-scrolling: touch;
        overflow-scrolling: touch;
        top: 0 !important;
        left: 0 !important;
        width: 100%;
        height: auto;
        max-height: 200px;
        margin: 0;
        border-left: none;
        border-right: none;
        -webkit-border-radius: 0 !important;
        -moz-border-radius: 0 !important;
        -ms-border-radius: 0 !important;
        -o-border-radius: 0 !important;
        border-radius: 0 !important;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        -ms-box-shadow: none;
        -o-box-shadow: none;
        box-shadow: none;
        }
        ul.scroll-menu-2x {
            max-height: 230px;
        }
        
            .scrollable-menu {
            height: auto;
            max-height: 200px;
            overflow-x: hidden;
        }
    </style>
    <?php endif; ?>
    <script src="<?php echo site_url()?>assets/js/plugin.js" type="text/javascript"></script>
    <script src="<?php echo site_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body onload="openLanguage()">
    <!-- <a onclick="removeSt()">remove storage</a> -->
    <header id="header">
        <div class="header-top">
            <div class="wrapper">
                <div class="container">
                    <div class="pull-left">
                        <div class="flag"> <a href="javascript:;" data-target="#langmodal" data-toggle="modal"><span class="flag-icon flag-icon-us"></span> English</a>                            </div>
                    </div>
                    <div class="pull-right login-section">
                        <ul class="contact-bar">
                            <li><a href="<?php echo site_url().'help'?>"><i class="fa fa-question-circle" aria-hidden="true"></i>Help</a></li>
                            <li><a href="index.html#" data-toggle="modal" data-target="#registerModal"><i class="fa fa-lock" aria-hidden="true"></i>Login/Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="logo">
                                <a href="<?php echo site_url(); ?>">
                                <img src="<?php echo site_url();?>assets/img/header/logo.png"/>
                                    </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <div class="nav" id="nav">
                                <a href="post-job.html#" id="toggle">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                <div class="main-menu" id="menu">
                                    <ul>
                                        <li>
                                            <a href="<?php echo site_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo site_url().'buyservices'?>">
                                                    <i class="fa fa-money" aria-hidden="true">
                                                        
                                                    </i>Buy Services</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo site_url()?>#OurServices">
                                                    <i class="fa fa-wrench" aria-hidden="true">
                                                        
                                                    </i>Our Services</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo site_url().'jobportal/job_search' ?>">
                                                    <i class="fa fa-file-text-o" aria-hidden="true">
                                                        
                                                    </i>Job Portal</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo site_url().'bepartner'?>">
                                                    <i class="fa fa-users" aria-hidden="true">
                                                        
                                                    </i>Be partner</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo site_url().'postjob'?>">
                                                    <i class="fa fa-plus-square" aria-hidden="true">
                                                        
                                                    </i> Post your Job</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>