<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Beta - Coming Soon Responsive Template</title>
        <meta name="description" content="Coming Soon Responsive Template">
        <link href="<?= base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>/assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>/assets/css/jquery.modal.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>/assets/css/main.css" rel="stylesheet">
        <style type="text/css"></style>
    </head>
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=790846217629394";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <body>
        <!--hero-unit-->
        <div class="hero-unit">
            <div class="overlay"></div>
            <!--container-->
            <div class="container">
                <header class="row">
                    <div class="col-md-6 col-sm-6"> 
                        <!--logo-->
                        <div class="logo"> <img src="<?= base_url() ?>/assets/images/logo.png" data-at2x="img/logo@2x.png" alt="logo"> </div>
                        <!--logo end--> 
                    </div>
                    <div class="col-md-6 col-sm-6 clearfix"> 
                        <!--social-->
                        <ul class="social text-center">
                            <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="https://linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <!--social end--> 
                    </div>
                </header>
                <!--cta-->
                <div class="cta">
                    <div class="row">
                        <div class="col-md-6 center-block">
                            <header class="welcome-message text-center">
                                <h1><span class="highlight">Blog. Sell. Profit well!</span></h1>
                                <h2>Discover the effective way for bloggers to make more money with their content</h2>
                                <!--sub-form-->
                                <div class="sub-form">
                                    <form role="form" id="mc-form" method="POST" action="<?php echo base_url() ?>welcome/saveEmail">
                                        <input type="email" placeholder="Email Address" required="" value="" name="email">
                                        <input type="hidden" value="<?php echo $this->uri->segment(2);?>" name="friend_code">
                                        <button type="submit" class="button" id="mc-subscribe" value="Subscribe" name="subscribe">GET ACCESS</button>
                                    </form>
                                    <p class="terms">* We won’t spam</p>
                                   
                                </div>
                                <!--sub-form end--> 
                            </header>
                        </div>
                    </div>
                </div>
                <!--cta end--> 

            </div>
            <!--container end--> 

        </div>
        <!--hero-unit end--> 
