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
            <img src="images/fish/fish_banner.png" alt="" />
        </div>
    </div>

    <div id="about" class="about">
        <div class="container">
            <h1 style="text-align:center; margin-bottom:50px;color:black;"><u>তেলাপিয়া </u></h1>
            <center><img class="about-pic" src="images/fish/telapiya.jpg" alt="" style="text"></center>


            <h3 style="font-weight:bold; margin-bottom:10px; color:green; margin-top: 40px; margin-bottom: 10px">মনোসেক্স তেলাপিয়া কি</h3>
            <p style="letter-spacing:1px;">তেলাপিয়া চাষের বড় সমস্যা হলো এর অনিয়ন্ত্রিত বংশ বিস্তার। এই ধরণের অনিয়ন্ত্রিত বংশবিস্তারের কারণে পুকুরে বিভিন্ন আকারের তেলাপিয়া মাছ দেখা যায়। এতে করে আশানুরূপ ফলন পাওয়া যায় না। প্রকৃতিগতভাবেই পুরুষ তেলাপিয়া মাছের দৈহিক বৃদ্ধির হার বেশি। এই ধারণাকেই কাজে লাগিয়ে শুধুমাত্র পুরুষ তেলাপিয়া চাষকেই মনোসেক্স তেলাপিয়া চাষ বলা হয়। এই প্রজাতি সম্পূক খাদ্য গ্রহণে অভ্যস্থ্য, প্রতিকূল পরিবেশেও টিকে থাকে, অধিক ঘনত্বে চাষ করা যায় এবং প্রজননের জন্য পুকুরের পাড়ে গর্ত করে না বিধায় বর্তমানে শুধুমাত্র পুরুষ তেলাপিয়া বা মনোসেক্স তেলাপিয়া চাষে খামারীদের আগ্রহ বাড়ছে।</p>

            <h3 style="font-weight:bold; margin-bottom:10px; color:green; margin-top: 40px; margin-bottom: 10px">মনোসেক্স তেলাপিয়া মাছের গুরুত্ব:</h3>
            <p>এ মাছ দ্রুত বেড়ে ওঠে
                <br>উচ্চ রোগ প্রতিরোধ ক্ষমতা সম্পন্ন এবং প্রতিকূল পরিবেশে টিকে থাকতে পারে
                <br>এ মাছের চাষাবাদ ব্যবস্থাপনা সহজতর।
                <br>মনোসেক্স তেলাপিয়া শুধুমাত্র পুরুষ তেলাপিয়া হওয়ায় স্ত্রী তেলাপিয়ার অভাবে প্রজনন সম্পন্ন করতে পারে না।
                <br>ফলে পুকুরে বাচ্চা হয় না এবং চাষে কোন বিঘ্ন ঘটে না। সম্পূরক খাবার দিয়ে অধিক ঘনত্বে চাষ করা যায়।</p>

            <h3 style="font-weight:bold; margin-bottom:10px; color:green; margin-top: 40px; margin-bottom: 10px">মনোসেক্স তেলাপিয়ার চাষ পদ্ধতি:</h3>
            <p>বামনোসেক্স তেলাপিয়া দুই ধাপে অর্থাৎ নার্সারি ও মজুদ পুকুরে চাষ করা হয়। এতে করে কম সময়ে একই পুকুর হতে অনেক বেশি উৎপাদন পাওয়া সম্ভব। </p>

            <h3 style="font-weight:bold; margin-bottom:10px; color:green; margin-top: 40px; margin-bottom: 10px">নার্সারি পুকুর নির্বাচন</h3>
            <p>দেড় ফুট থেকে চার ফুট গভীরতার পুকুর তেলাপিয়া নার্সারির জন্য অত্যন্ত উপযোগী। পুকরে নির্বাচনের সময় খেয়াল রাখতে হবে- পুকুরের পাড়সমূহ যেন মজবুত ও বন্যামুক্ত থাকে; পুকুরে পর্যাপ্ত সূর্যের আলো পড়ে; পুকুরটি যেন জলজ আগাছামুক্ত থাকে।</p>

            <h3 style="font-weight:bold; margin-bottom:10px; color:green; margin-top: 40px; margin-bottom: 10px">মজুদ পুকুর ব্যবস্থাপনা:</h3>
            <p>মজুদ পুকুরের গভীরতা কোন সমস্যা নয়। ফলে বেশি গভীরতার পুকুরকেও তেলাপিয়া মাছ চাষে ব্যবহার করা যায়। প্রথমেই সম্পূর্ণ পুকুর শুকিয়ে অথবা বারবার জাল টেনে কিংবা রোটেনন ওষুধ প্রয়োগ করে রাক্ষুসে ও অবাঞ্ছিত মাছ দূর করে নিতে হবে; এরপর প্রতি শতকে ১ কেজি চুন, ৫-৭ কেজি গোবর, ১০০-১৫০ গ্রাম ইউরিয়া, ৫০-৭৫ গ্রাম টিএসপি ও ২০ গ্রাম এমওপি সার প্রয়োগ করতে হবে; সার দেয়ার ৫-৭ দিন পর যখন পুকুরে পর্যাপ্ত প্রাকৃতিক খাবার তৈরি হবে তখন নার্সারি পুকুরে উৎপাদিত ২০-২৫ গ্রাম ওজনের পোনা থেকে প্রতি শতকে ২০০-২৫০ টি হারে পোনা মজুদ করতে হবে; পুকুরে প্রাকৃতিক খাবারের যাতে অভাব না হয় সেজন্য প্রতি ৭ দিন পরপর প্রতি শতকে ৪-৫ কেজি গোবর, ২-৩ কেজি মুরগীর বিষ্ঠা, ৩৫ গ্রাম ইউরিয়া ও ২০ গ্রাম টিএসপি সার দিতে হবে। তবে পরবর্তীতে খাবার প্রয়োগের পরিমান বেড়ে গেলে সার প্রয়োগ বন্ধ করে দিতে হবে। মাছের গড় ওজন যখন ১০০ গ্রামের বেশি হয় তখন থেকেই দৈনিক ৫% হারে পুকুরের পানি পরিবর্তন করে দিলে ভাল ফল পাওয়া যায়। মজুদের ১০০-১২০ দিন পর থেকে মাছের গড় ওজন ২০০-২৫০ গ্রাম হয়ে যায়। তখন থেকেই মাছ বিক্রি করা যেতে পারে। যখন মাছের গড় ওজন ৩০০-৫০০ গ্রাম হয় তখন বাজারের চাহিদার ওপর ভিত্তি করে সব মাছ ধরে ফেলতে হয়।</p>

            <h3 style="font-weight:bold; margin-bottom:10px; color:green; margin-top: 40px; margin-bottom: 10px">সম্ভাব্য রোগ</h3>

            <h5 style="font-weight: bold; margin-bottom: 2px; margin-bottom: 10px;"> <b style="color: green;">রোগের নামঃ </b>স্ট্রেপটোকক্কোসিস</h5>

            <h5 style="font-weight: bold;"> <b style="color: green;">রোগের কারন:  </b></h5>
            <p>
                <br> ১. কোনো অনুজীবের যেমন- ভাইরাসব্যকটেরিয়া আক্রমণ
                <br>২. পরিবেশগত বিশৃঙ্খলতা
                <br> ৩. আশেপাশের এলাকায় অতিরিক্ত পরিমাণ রাসায়নিক সার কিংবা আগাছা নাশকের ব্যবহার
                <br> ৪. খাঁচায় মাছের জন্য অতিরিক্ত খাবার সরবরাহ
                <br> ৫. প্রতিটি খাঁচায় মাছের অধিক ঘনত্ব
                <br> ৬. খাঁচার ভেতরের পানির ঢ়ঐ এর তারতম্য
                <br> ৭. খাঁচায় অক্সিজেন সরবরাহ কম ইত্যাদি।
            </p>

            <div class="container">
                <div class="table-responsive" style="padding-bottom: 0px !important;">
                    <table class="table table-bordered" style="background: #e4e5e6; text-align: center;  ">
                        <thead>
                            <tr style='font-size:20px; !important;'>
                                <th style=" text-align: center; ">রোগের লক্ষণ</th>
                                <th style=" text-align: center; "> ছবি</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: justify"> ১. মাছের কানকোর কিছু অংশ বিবর্ণ হয়ে যায়
                                    <br>২. অঙ্কীয়দেশে কিছু অনাকাক্সিক্ষত দাগ দেখা যায়।
                                    <br>৩. মাছের পিত্তথলী স্বাভাবিকের চেয়ে কিছুটা বড় হয়ে যায়।
                                    <br>৪. কেবল ১০০ থেকে ৪০০ গ্রামের মাছেই এই রোগ দেখা যায়
                                    <br>৫. আক্রান্ত- হওয়ার সাথে সাথে মাছ দ্রুত মারা যায়।
                                    <br>৬. মৃত্যুর আগে মাছগুলো কুণ্ডলি আকারে ঘোরাফেরা করে।
                                </td>
                                <td><img src="images/disease/Tilapia-disease.jpg" alt=""></td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <h5 style="font-weight: bold; margin-bottom: 2px;margin-bottom: 10px; color: green;margin-top: 10px; ">প্রতিরোধ ও চিকিৎসাঃ</h5> ১. খাঁচায় অধিক পরিমাণে অক্সিজেন সরবরাহ করতে হবে
            <br> ২. খাঁচায় মাছের ঘনত্ব কমাতে হবে
            <br> ৩. খাদ্য সরবরাহ কমাতে হবে
            <br> ৪. নেট পরিস্কার রাখতে হবে, ৫. এন্টিবায়োটিক ডোজ বাড়াতে হবে
            <br> ৬. খাঁচাগুলো সারিবদ্ধভাবে না রেখে আঁকাবাঁকা করে রাখা যেতে পারে। লেখক: বিকাশ কীর্ত্তনিয়া, বাকৃবি, ময়মনসিংহ
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
