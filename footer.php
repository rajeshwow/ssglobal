<script>
  $(document).ready(function() {
   $('#loading').fadeOut(100);
});
</script>

<footer class="new_footer_area bg_color">
    <div class="new_footer_top">
        <div class="container">
            <div class="row">
                <div class="container">
                    <h1 style="text-align: center">Call us: <a href="tel:9928807439">+91 99288-07439</a> </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Navigate</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./granite.php">Stone</a></li>
                            <li><a href="./peenuts.php">Agro</a></li>
                            <li><a href="./aboutus.php">About Us </a></li>
                            <li><a href="./index.php#contact">Contact Us</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Help</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="./index.php#contact">Reach us</a></li>
                            <!-- <li><a href="t&c.php" target="_blank">Term &amp; conditions</a></li>
                            <li><a href="refund.php" target="_blank">Refund Policy</a></li>
                            <li><a href="./privacy.php" target="_blank">Privacy Policy</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Social</h3>
                        <div class="f_social_icon">
                            <a target="_blank" href="#" ><span class="fab social_icons fa-facebook"></span></a>
                            <a target="_blank" href="#" ><span class="fab social_icons fa-twitter"></span></a>
                            <a target="_blank" href="#" ><span class="fab social_icons fa-linkedin"></span></a>
                            <a target="_blank" href="#" ><span class="fab social_icons fa-google"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">We are here</h3>
                        <h5>Address 1</h5>
                        <p>Plot no 19-A, Hari Nagar, Gokulpura <br>Jaipur-Nagour Highway <br>Jaipur 302012(Raj.) India</p>

                        <h5>Address 2</h5>
                        <p>E-1-103, RIICO Ind. Area,  <br>6th phase, Madanganj Kishangarh. <br>Rajasthan</p><vr>

                        <h4 >
                            <a style="color: black;" target="_blank" href="tel:+91 95831-77777">
                                <span><i style="font-size: 12px;" class="fas fa-phone-alt"></i></span> +91 99288-07439
                            </a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <br>
        <div class="footer_bg">
            <div class="footer_bg_one"></div>
            <div class="footer_bg_two"></div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-7">
                    <p class="mb-0 f_400">© <a href="https://bispl.net.in">SS Global</a> <?php echo date("Y") ?> All rights reserved.</p>
                </div>
                <div class="col-lg-6 col-sm-5 text-right">
                    <!-- <p>Made with <i class="icon_heart"></i> in <a href="#">CakeCounter</a></p> -->
                </div>
            </div>
        </div>
    </div>
</footer>
<style type="text/css">
    .social_icons{
        font-size: 25px;
        margin: 0px 7px;
    }

       .footer_bg {
        position: absolute;
        bottom: 0;
        background: url("./img/footer_bg.png") no-repeat scroll center 0;
        width: 100%;
        background-color: aliceblue;
        height: 266px;
    }

    .footer_bg .footer_bg_one {
        background: url("./img/cyclist.gif") no-repeat center center;
        width: 80px;
        height: 86px;
        background-size:100%;
        position: absolute;
        z-index: 1;
        bottom: 0;
        left: 30%;
        -webkit-animation: myfirst 30s linear infinite;
        animation: myfirst 30s linear infinite;
    }

    .footer_bg .footer_bg_two {
        background: url("./img/volks.gif") no-repeat center center;
        width: 300px;
        height: 100px;
        background-size:100%;
        bottom: 0;
        left: 38%;
        position: absolute;
        -webkit-animation: myfirst 22s linear infinite;
        animation: myfirst 22s linear infinite;
    }



    @-moz-keyframes myfirst {
      0% {
        left: -25%;
    }
    100% {
        left: 100%;
    }
    }

    @-webkit-keyframes myfirst {
      0% {
        left: -25%;
    }
    100% {
        left: 100%;
    }
    }

    @keyframes myfirst {
      0% {
        left: -25%;
    }
    100% {
        left: 100%;
    }
    }


    .new_footer_area {
        background: #fbfbfd;
    }


    .new_footer_top {
        padding: 120px 0px 270px;
        position: relative;
        overflow-x: hidden;
    }
    .new_footer_area .footer_bottom {
        padding-top: 5px;
        
    }
    .footer_bottom {
        font-size: 14px;
        font-weight: 300;
        line-height: 20px;
        color: #7f88a6;
        
    }
    .new_footer_top .company_widget p {
        font-size: 16px;
        font-weight: 300;
        line-height: 28px;
        color: #6a7695;
        margin-bottom: 20px;
    }
    .new_footer_top .company_widget .f_subscribe_two .btn_get {
        border-width: 1px;
        margin-top: 20px;
    }
    .btn_get_two:hover {
        background: transparent;
        color: #5e2ced;
    }
    .btn_get:hover {
        color: #fff;
        background: #6754e2;
        border-color: #6754e2;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
    a:hover, a:focus, .btn:hover, .btn:focus, button:hover, button:focus {
        text-decoration: none;
        outline: none;
    }



    .new_footer_top .f_widget.about-widget .f_list li a:hover {
        color: #5e2ced;
    }
    .new_footer_top .f_widget.about-widget .f_list li {
        margin-bottom: 11px;
    }
    .f_widget.about-widget .f_list li:last-child {
        margin-bottom: 0px;
    }
    .f_widget.about-widget .f_list li {
        margin-bottom: 15px;
    }
    .f_widget.about-widget .f_list {
        margin-bottom: 0px;
    }
    .new_footer_top .f_social_icon a {
        width: 44px;
        height: 44px;
        line-height: 43px;
        background: transparent;
        border: 1px solid #e2e2eb;
        font-size: 24px;
    }
    .f_social_icon a {
        width: 46px;
        height: 46px;
        border-radius: 50%;
        font-size: 14px;
        line-height: 45px;
        color: #858da8;
        display: inline-block;
        background: #ebeef5;
        text-align: center;
        -webkit-transition: all 0.2s linear;
        -o-transition: all 0.2s linear;
        transition: all 0.2s linear;
    }
    .ti-facebook:before {
        content: "\e741";
    }
    .ti-twitter-alt:before {
        content: "\e74b";
    }
    .ti-vimeo-alt:before {
        content: "\e74a";
    }
    .ti-pinterest:before {
        content: "\e731";
    }

    .btn_get_two {
        -webkit-box-shadow: none;
        box-shadow: none;
        background: #5e2ced;
        border-color: #5e2ced;
        color: #fff;
    }

    .btn_get_two:hover {
        background: transparent;
        color: #5e2ced;
    }

    .new_footer_top .f_social_icon a:hover {
        background: #5e2ced;
        border-color: #5e2ced;
        color:white;
    }
    .new_footer_top .f_social_icon a + a {
        margin-left: 4px;
    }
    .new_footer_top .f-title {
        margin-bottom: 30px;
        color: #263b5e;
    }
    .f_600 {
        font-weight: 600;
    }
    .f_size_18 {
        font-size: 18px;
    }
    
    .new_footer_top .f_widget.about-widget .f_list li a {
        color: #6a7695;
    }
    /*************footer End*****************/

#top{
   background: darkorange;
    color: white;
    padding: 0%;
    position: fixed;
    bottom: 50px;
    height: 60px;
    width: 60px;
    text-align: center;
    right: 50px;
    cursor: pointer;
    font-size: 40px;
    border-radius: 50%;
}

</style>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<div id="top">
    <i class="fas fa-angle-up"></i>
</div>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</body>
</html>