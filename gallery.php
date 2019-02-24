<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>বাংলার কৃষক</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" src="css/bootstrap-dropdownhover.min.css" type="text/css" />
    <link rel="stylesheet" src="css/animate.min.css" type="text/css" />
    <script src="js/jquery.easing.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,500,700,800,900,600,200' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='shortcut icon' href='images/favicon.png' type='image/x-icon' />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <script src="js/jquery.min.js">


    </script>
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });

    </script>
    <!---- start-smoth-scrolling---->

    <!----//requred-js-files---->
    <script type="text/javascript" src="js/jquery.smint.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.subMenu').smint({
                'scrollSpeed': 1000
            });
        });

    </script>

    <!--Start of Zopim Live Chat Script-->
    <script type="text/javascript">
        window.$zopim || (function(d, s) {
            var z = $zopim = function(c) {
                    z._.push(c)
                },
                $ = z.s =
                d.createElement(s),
                e = d.getElementsByTagName(s)[0];
            z.set = function(o) {
                z.set.
                _.push(o)
            };
            z._ = [];
            z.set._ = [];
            $.async = !0;
            $.setAttribute("charset", "utf-8");
            $.src = "//v2.zopim.com/?4JmQ4pWNHAuxIYWqKGGxlse8apbsqg9o";
            z.t = +new Date;
            $.
            type = "text/javascript";
            e.parentNode.insertBefore($, e)
        })(document, "script");

        $zopim(function() {
            $zopim.livechat.setGreetings({
                'online': 'সরাসরি যোগাযোগ করুন',
                'offline': 'সরাসরি যোগাযোগ করুন '
            });
            $zopim.livechat.setLanguage('');
            $zopim.livechat.concierge.setTitle('কিছু জানতে চাইলে বলুন! ');
        });

    </script>
    <!--End of Zopim Live Chat Script-->

</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bspi">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="index.php" class="navbar-brand" style="color:gold; !important;">বাংলার কৃষক</a>
                <img src="images/logo2.png" alt="" style="max-width:50px; max-height:50px;">

            </div>
            <div class="collapse navbar-collapse" id="bspi">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">হোম</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-expanded="true">খাদ্যশস্য <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="rice.php">ধান</a></li>
                            <li><a href="">পাঁট </a></li>
                            <li><a href="">গম </a></li>
                            <li><a href="">ভুট্টা</a></li>
                            <li><a href="#">আলু</a></li>
                            <li><a href="#">পটল</a></li>
                            <li><a href="#">শষা</a></li>
                            <li><a href="#">বেগুন</a></li>
                            <li><a href="#">মিস্টি কুমড়া </a></li>
                        </ul>
                    </li>

                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-expanded="true">গবাদি পশু<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="cow.php">গরু</a></li>
                            <li><a href="#">ছাগল </a></li>
                            <li><a href="#">ভেড়া</a></li>
                            <li><a href="#">মহিষ</a></li>
                            <li><a href="#">মুরগি</a></li>
                            <li><a href="#">হাঁস</a></li>
                            <li><a href="#">ভেড়া</a></li>
                            <li><a href="#">মহিষ</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" data-hover="dropdown" aria-expanded="true">মৎস্য সম্পদ <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="rui_fish.php">তেলাপিয়া</a></li>
                            <li><a href="">পাঙ্গাস</a></li>
                            <li><a href="">শিং</a></li>
                            <li><a href="">চিংড়ি</a></li>
                            <li><a href="">কৈ মাছ </a></li>
                            <li><a href="fish.php">বিস্তারিত </a></li>

                        </ul>
                    </li>
                    <li><a href="bazar.php">বাজার দর </a></li>

                    <li><a href="gallery.php">ছবি</a></li>
                    <li><a href="vedio.php">চলচিত্র</a></li>
                    <li><a href="about.php">আমাদের সম্পর্কে</a></li>
                    <li><a href="contact.php">যোগাযোগ</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!----start-portfolio---->
    <div id="gallery" class="portfolio section s2">
        <div class="container portfolio-head">
            <h3 style="margin-top: 100px"> ছবি </h3>
            <p>আসসালামু আলাইকুম। সবাইকে নতুন বছরের শুভেচ্ছা। অনেকদিন পর পিসি হেল্পলাইন বিডি বাংলাদেশ এ পোস্ট করছি। নতুন বছরের শুরুতে আপনাদের আমি কোন চমকপ্রদ সফটওয়ার বা ট্রিক্স উপহার দিতে পারছি না বলে দুঃখিত। তবে আমি আপনাদের সফটওয়ার ও টিউটোরিয়ালের এক সংগ্রহশালার সন্ধান দিচ্ছি যা আপনারা যে যেখানে আছেন সেখান থেকেই সম্পূর্ণ বিলামূল্যে সংগ্রহ করতে পারবেন। হ্যাঁ, এই সংগ্রহশালাটিকে এর উদ্যোক্তারা নাম দিয়েছেন দীপ্ত প্রজেক্ট ২০১২। </p>
        </div>
        <!---- start-portfolio-script----->
        <script src="js/hover_pack.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
        <script type="text/javascript">
            $(function() {
                var filterList = {
                    init: function() {

                        // MixItUp plugin
                        // http://mixitup.io
                        $('#portfoliolist').mixitup({
                            targetSelector: '.portfolio',
                            filterSelector: '.filter',
                            effects: ['fade'],
                            easing: 'snap',
                            // call the hover effect
                            onMixEnd: filterList.hoverEffect()
                        });

                    },
                    hoverEffect: function() {
                        // Simple parallax effect
                        $('#portfoliolist .portfolio').hover(
                            function() {
                                $(this).find('.label').stop().animate({
                                    bottom: 0
                                }, 200, 'easeOutQuad');
                                $(this).find('img').stop().animate({
                                    top: -30
                                }, 500, 'easeOutQuad');
                            },
                            function() {
                                $(this).find('.label').stop().animate({
                                    bottom: -40
                                }, 200, 'easeInQuad');
                                $(this).find('img').stop().animate({
                                    top: 0
                                }, 300, 'easeOutQuad');
                            }
                        );

                    }

                };
                // Run the show!
                filterList.init();
            });

        </script>
        <!----//End-portfolio-script----->

        <ul id="filters" class="clearfix">
            <li><span class="filter active" data-filter="app card icon">সবগুলো</span></li>
            <li><span class="filter" data-filter="app">বীজ বপন</span></li>
            <li><span class="filter" data-filter="card">ফসল</span></li>
            <li><span class="filter" data-filter="icon">উন্নয়ন</span></li>
        </ul>
        <div id="portfoliolist">
            <div class="portfolio app mix_all" data-cat="logo" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
                        <img src="images/p1.jpg" />
                        <div class="b-wrapper">
                            <h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
                        <img src="images/p2.jpg" />
                        <div class="b-wrapper">
                            <h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="portfolio card mix_all" data-cat="web" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
                        <img src="images/p3.jpg" />
                        <div class="b-wrapper">
                            <h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
                        <img src="images/p4.jpg" />
                        <div class="b-wrapper">
                            <h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
                        <img src="images/p8.jpg" />
                        <div class="b-wrapper">
                            <h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
                        <img src="images/p6.jpg" />
                        <div class="b-wrapper">
                            <h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
                        <img src="images/p7.jpg" />
                        <div class="b-wrapper">
                            <h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
                        <img src="images/p5.jpg" />
                        <div class="b-wrapper">
                            <h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!----//End-portfolio---->

    <script src="js/bootstrap.min.js"></script>
    <!----start-model-box---->
    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#"> </a>
    <div class="modal fade bs-example-modal-md light-box" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content light-box-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="images/close.png" title="close" /></button>
                <h3>আধুনিক চাষাবাদ </h3>
                <p>আসসালামু আলাইকুম। সবাইকে নতুন বছরের শুভেচ্ছা। অনেকদিন পর পিসি হেল্পলাইন বিডি বাংলাদেশ এ পোস্ট করছি। নতুন বছরের শুরুতে আপনাদের আমি কোন চমকপ্রদ সফটওয়ার বা ট্রিক্স উপহার দিতে পারছি না বলে দুঃখিত। তবে আমি আপনাদের সফটওয়ার ও টিউটোরিয়ালের এক সংগ্রহশালার সন্ধান দিচ্ছি যা আপনারা যে যেখানে আছেন সেখান থেকেই সম্পূর্ণ বিলামূল্যে সংগ্রহ করতে পারবেন। হ্যাঁ, এই সংগ্রহশালাটিকে এর উদ্যোক্তারা নাম দিয়েছেন দীপ্ত প্রজেক্ট ২০১২।</p>
            </div>
        </div>
    </div>
    <!----start-model-box---->

    <div class="copy-right">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget" style="margin-top: 30px">
                        <h3 style="margin-bottom: 10px; font-size: 28px;letter-spacing: 1px" font-size="10px">গুরুত্বপূর্ণ লিংক</h3>
                        <ul>
                            <li><a href="http://www.moa.gov.bd/">কৃষি মন্ত্রণালয়</a></li>

                            <li><a href="http://www.cabinet.gov.bd">মন্ত্রিপরিষদ বিভাগ</a></li>

                            <li><a href="http://badc.gov.bd">বাংলাদেশ কৃষি উন্নয়ন কর্পোরেশন</a></li>

                            <li><a href="http://www.barc.gov.bd/home.php">বাংলাদেশ কৃষি গবেষণা কাউন্সিল</a></li>

                            <li><a href="http://www.dae.gov.bd">কৃষি সম্প্রসারণ অধিদপ্তর</a></li>
                        </ul>
                    </div>
                </div>
                <!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget" style="margin-top: 30px">
                        <h3 style="margin-bottom: 10px; font-size: 28px;letter-spacing: 1px" font-size="10px">দ্রুত লিঙ্ক</h3>
                        <ul>
                            <li><a href="http://www.brri.gov.bd">বাংলাদেশ ধান গবেষণা ইনস্টিটিউট</a></li>
                            <li><a href="www.bjri.gov.bd ">বাংলাদেশ পাট গবেষণা ইনস্টিটিউট</a></li>
                            <li><a href="http://www.bsri.gov.bd/">বাংলাদেশ সুগারক্রপ গবেষণা ইনস্টিটিউট</a></li>
                            <li><a href="http://www.bari.gov.bd/">বাংলাদেশ কৃষি গবেষণা ইনস্টিটিউট</a></li>

                        </ul>

                    </div>
                </div>
                <!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget" style="margin-top: 30px">
                        <h3 style="margin-bottom: 10px; font-size: 28px;letter-spacing: 1px" font-size="10px">কেন্দ্রীয় ই-সেবা</h3>
                        <ul>
                            <li><a href="http://www.nothi.gov.bd/users/login">নথি</a></li>





                            <li><a href="http://www.dip.gov.bd/site/page/f2d015a9-1132-4426-8eef-147f1c4bac8a">অনলাইনে পাসপোর্টের আবেদন</a></li>


                            <li><a href="http://online.forms.gov.bd/">অনলাইনে সেবার আবেদন</a></li>


                            <li><a href="http://vawcms.gov.bd/">নারী ও শিশু নির্যাতন প্রতিরোধ কর্মসূচি</a></li>


                            <li><a href="https://www.esheba.cnsbd.com/"> ই-টিকেটিং</a></li>


                            <li><a href="http://www.bmet.gov.bd/BMET/onlinaVisaCheckAction"> ভিসা যাচাই </a></li>



                        </ul>
                    </div>
                </div>
                <!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget" style="margin-top: 30px">

                        <span style="margin-left: -35px;">
                                        <img src="images/logo.png" style="margin-top: 20px">
                            </span>
                    </div>
                </div>


            </div>

            <img src="images/footer.png" alt="" style="margin-bottom: 5px; ">
            <p> &copy; সর্বস্বত্ব সংরক্ষিত &nbsp; &nbsp; <b style="font-size: 15px; color: white;  ">বাংলার কৃষক</b></p>

        </div>



    </div>



    <script src="js/bootstrap-dropdownhover.js"></script>
</body>

</html>
