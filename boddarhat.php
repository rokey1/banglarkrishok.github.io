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



    <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 60px; overflow:hidden;">
        <div class="thumbnail" style="margin-top:60px; margin-bottom:100px;">
            <img src="images/bazar/bazar_banner.png" alt="" />
        </div>
    </div>

    <div id="about" class="about">
        <div class="container">
            <h1 style="text-align:center; margin-bottom:50px;color:black;"><u>বহাদ্দারহাট কাঁচা বাজার </u></h1>
            <center><img class="about-pic" src="images/bazar/bazar_monitor.jpg" alt="" style="text"></center>

        </div>
    </div>

    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr style='font-size:25px; !important;'>
                        <th colspan="3" style="padding:10px;background-color:#1F1F21;color:white;font-weight:bold; font-size:20px; text-align:center; ">সবজি</th>
                    </tr>
                </thead>

                <tr style="font-size:18px;">
                    <th style="text-align:center;">নাম</th>
                    <th style="text-align:center;">মুল্য</th>
                    <th style="text-align:center;">পরিমান</th>
                </tr>
                <tbody style="text-align:center;">
                    <tr>
                        <td>কাঁচা মরিচ</td>
                        <td>৬০ থেকে ৭০ টাকা</td>
                        <td>১ কেজি</td>

                    </tr>
                    <tr>
                        <td>লম্বা বেগুন </td>
                        <td> ৪০ টাকা</td>
                        <td>১ কেজি</td>
                    </tr>

                    <tr>
                        <td>গোল বেগুন </td>
                        <td>৪০ টাকা</td>
                        <td>১ কেজি</td>
                    </tr>
                    <tr>
                        <td>ঝিঙ্গা</td>
                        <td>৩৫ টাকা</td>
                        <td>১ কেজি</td>
                    </tr>


                </tbody>
            </table>



            <table class="table table-bordered">
                <thead>
                    <tr style='font-size:25px; !important;'>
                        <th colspan="3" style="padding:10px;background-color:#1F1F21;color:white;font-weight:bold; font-size:20px; text-align:center; ">মুদি</th>
                    </tr>
                </thead>

                <tr style="font-size:18px;">
                    <th style="text-align:center;">নাম</th>
                    <th style="text-align:center;">মুল্য</th>
                    <th style="text-align:center;">পরিমান</th>
                </tr>
                <tbody style="text-align:center;">
                    <tr>
                        <td>পেঁয়াজ </td>
                        <td>৩৫ টাকা</td>
                        <td>১ কেজি</td>

                    </tr>
                    <tr>
                        <td>রসুন</td>
                        <td> ৮৫ টাকা</td>
                        <td>১ কেজি</td>
                    </tr>

                    <tr>
                        <td>দেশি আদা </td>
                        <td>১৬০ টাকা</td>
                        <td>১ কেজি</td>
                    </tr>
                    <tr>
                        <td> সয়াবিন তেল</td>
                        <td>১১৫ টাকা</td>
                        <td>১ লিটার</td>
                    </tr>


                </tbody>
            </table>

            <table class="table table-bordered">
                <thead>
                    <tr style='font-size:25px; !important;'>
                        <th colspan="3" style="padding:10px;background-color:#1F1F21;color:white;font-weight:bold; font-size:20px; text-align:center; ">মাছ</th>
                    </tr>
                </thead>

                <tr style="font-size:18px;">
                    <th style="text-align:center;">নাম</th>
                    <th style="text-align:center;">মুল্য</th>
                    <th style="text-align:center;">পরিমান</th>
                </tr>
                <tbody style="text-align:center;">
                    <tr>
                        <td>ইলিশ</td>
                        <td>১০০০ থেকে ১২০০ টাকা</td>
                        <td>১ কেজি</td>

                    </tr>
                    <tr>
                        <td>বড় সাইজের কাতল</td>
                        <td>৩৫০ থেকে ৩৮০ টাকা</td>
                        <td>১ কেজি</td>
                    </tr>

                    <tr>
                        <td>রুই </td>
                        <td>২০০ থেকে ২৫০ টাকা</td>
                        <td>১ কেজি</td>
                    </tr>
                    <tr>
                        <td> তেলাপিয়া</td>
                        <td>১২০ থেকে ১৪০ টাকা</td>
                        <td>১ কেজি</td>
                    </tr>


                </tbody>
            </table>

            <table class="table table-bordered">
                <thead>
                    <tr style='font-size:25px; !important;'>
                        <th colspan="3" style="padding:10px;background-color:#1F1F21;color:white;font-weight:bold; font-size:20px; text-align:center; ">মাংস</th>
                    </tr>
                </thead>

                <tr>
                    <th style="text-align:center;">নাম</th>
                    <th style="text-align:center;">মুল্য</th>
                    <th style="text-align:center;">পরিমান</th>
                </tr>
                <tbody style="text-align:center;">
                    <tr>
                        <td>গরুর মাংস</td>
                        <td>২৮০ থেকে ৩০০ টাকা</td>
                        <td>১ কেজি</td>

                    </tr>
                    <tr>
                        <td>খাসির মাংস </td>
                        <td> ৪৫০ থেকে ৪৮০ টাকা</td>
                        <td>১ কেজি</td>
                    </tr>

                    <tr>
                        <td>ভেড়া ও ছাগীর মাংস</td>
                        <td>৪০০ টাকা</td>
                        <td>১ কেজি</td>
                    </tr>
                    <tr>
                        <td>দেশি মুরগি </td>
                        <td>৩৫০ টাকা</td>
                        <td>১ কেজি</td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>




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



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-dropdownhover.js"></script>
    <script src="js/npm.js"></script>
</body>

</html>
