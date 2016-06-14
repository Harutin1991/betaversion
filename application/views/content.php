<!--features-->
<section class="features text-center section-spacing"> 
    <!--container-->
    <div class="container">
        <h2>OUR FEATURES</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="slide-left feature" style="opacity: 1; visibility: visible; position: relative; right: 0px;"> <img src="<?= base_url() ?>/assets/images/feature-1.png" data-at2x="img/feature-1@2x.png" alt="feature">
                    <h3>Lorem Ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, iusto, cupiditate, mollitia harum culpa blanditiis iure nisi.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="slide-top feature" style="opacity: 1; visibility: visible; position: relative; bottom: 0px;"> <img src="<?= base_url() ?>/assets/images/feature-2.png" data-at2x="img/feature-2@2x.png" alt="feature">
                    <h3>Lorem Ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, iusto, cupiditate, mollitia harum culpa blanditiis iure nisi.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="slide-right feature" style="opacity: 1; visibility: visible; position: relative; left: 0px;"> <img src="<?= base_url() ?>/assets/images/feature-3.png" data-at2x="img/feature-3@2x.png" alt="feature">
                    <h3>Lorem Ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, iusto, cupiditate, mollitia harum culpa blanditiis iure nisi.</p>
                </div>
            </div>
        </div>
    </div>
    <!--container end--> 
</section>
<!--features end--> 

<!--counter-->
<div class="counter text-center">
    <div class="overlay"></div>
    <!--container-->
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-6"> <i class="fa fa-users fa-3x"></i>
                <h3 class="total-number-1">0</h3>
                <p>Registered users</p>
            </div>
            <div class="col-sm-3 col-xs-6"> <i class="fa fa-thumbs-up fa-3x"></i>
                <h3 class="total-number-2">0</h3>
                <p>Facebook Fans</p>
            </div>
            <div class="col-sm-3 col-xs-6"> <i class="fa fa-smile-o fa-3x"></i>
                <h3 class="total-number-3">0</h3>
                <p>Talking About This</p>
            </div>
            <div class="col-sm-3 col-xs-6"> <i class="fa fa-heart fa-3x"></i>
                <h3 class="total-number-4">0</h3>
                <p>Subscribed Users</p>
            </div>
        </div>
    </div>
    <!--container end--> 
</div>
<!--counter end--> 

<!-- contact-->
<section class="contact section-spacing" id="contact">
    <h2 class="text-center">CONTACT US</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-8 center-block"> 

                <!--contact form-->

                <div class="contact-form">
                    <div class="success-sf">
                        <p>Thank You! Your message has been sent.</p>
                    </div>
                    <div class="error-sf">
                        <p>Something went wrong, try refreshing and submitting the form again.</p>
                    </div>
                    <form role="form" action="<?php echo base_url() ?>welcome/sendEmailContact" method="post" id="contact-form" novalidate="novalidate">
                        <div class="form-group">
                            <input type="text" class="slide-left form-control" name="name" id="name-s" placeholder="Full Name" required="" aria-required="true" style="opacity: 0; visibility: visible; position: relative; right: 50px;">
                        </div>
                        <div class="form-group">
                            <input type="email" class="slide-left form-control" name="email" id="email-s" placeholder="Email Address" required="" aria-required="true" style="opacity: 0; visibility: visible; position: relative; right: 50px;">
                        </div>
                        <div class="form-group text-area">
                            <textarea class="slide-right form-control" name="message" id="message-s" rows="4" placeholder="Enter Your Message" required="" aria-required="true" style="opacity: 0; visibility: visible; position: relative; left: 50px;"></textarea>
                        </div>
                        <button type="submit" class="slide-right btn button" id="submit-btn-s" style="opacity: 0; visibility: visible; position: relative; left: 50px;">SEND </button>
                    </form>

                    <!--contact form end--> 

                </div>
            </div>
        </div>
    </div>
    <p class="scroll-top"><a href="http://csmthemes.com/themes/beta/static2/#" style="display: none;"><i class="fa fa-chevron-up"></i></a></p>
</section>
<!-- contact end--> 
<div id="shareModal" style="display:none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">You are #<span id="userCount">0</span> on the waiting list</h4>
            </div>
            <div class="modal-body">
                <p id="mc-notification"></p>
                <p>Want to cut the line and get instant access</p>
                <small>Get 5 of your friends to signup with this unique url</small>
                <div class="input-group">
                    <input type="text" class="form-control" id="gencode" aria-describedby="basic-addon1">
                </div>
            </div>
            <br>
            <div class="col-md-12 col-sm-12 clearfix"> 
                <!--social-->
                <ul class="social text-center" style="width: 100%;" >
                    <li style="margin-left: -25px;">
                        <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a> 
                        <script>!function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                                if (!d.getElementById(id)) {
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = p + '://platform.twitter.com/widgets.js';
                                    fjs.parentNode.insertBefore(js, fjs);
                                }
                            }(document, 'script', 'twitter-wjs');</script>
                    </li>
                    <li>
                        <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>
                    </li>
                    <li><!-- Place this tag where you want the share button to render. -->
                        <div class="g-plus" data-action="share" data-annotation="none" data-height="15"></div>

                        <!-- Place this tag after the last share tag. -->
                        <script type="text/javascript">
                            (function () {
                                var po = document.createElement('script');
                                po.type = 'text/javascript';
                                po.async = true;
                                po.src = 'https://apis.google.com/js/platform.js';
                                var s = document.getElementsByTagName('script')[0];
                                s.parentNode.insertBefore(po, s);
                            })();
                        </script>
                    </li>
                    <li>                    
                        <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
                        <script type="IN/Share"></script>
                    </li>
                </ul>
                <!--social end--> 
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>