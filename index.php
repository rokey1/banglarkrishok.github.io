<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
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
    <!--body-->
    <div id="home" class="banner">
        <div class="container">
            <div class="banner-info">
                <div class="logo">
                    <a href="index.php"><img src="images/logo2.png" alt="" /></a>
                </div>
                <h1>বাংলার কৃষক</h1>
                <p>আমাদের অর্থনীতিতে কৃষির অবদান অনস্বীকার্য। কৃষকদের প্রায় প্রতিদিনই বীজ, ফসল ও জমি সংক্রান্ত কোনো না কোনো সমস্যায় পড়তে হয়। কৃষকদেরকে যথাসময়ে সঠিক তথ্য সরবরাহ করাই “বাংলার কৃষক” এর উদ্দেশ্যেই </p>
                <a class="hvr-shutter-out-vertical button scroll" href="#scroll">আরো দেখুন </a>
            </div>
        </div>
    </div>
    <!---->
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

    <!---->
    <div class="top-grid" id="scroll">
        <div class="container">
            <div class="top-grid-section">
                <div class="col-md-3 top-grids">
                    <span class="icon1"></span>
                    <h3>কৃষিজ উন্নয়ন </h3>
                    <p>বাংলাদেশ কৃষিপ্রধান দেশ। এদেশে শতকরা ৭৫ ভাগ লোক গ্রামে বাস করে। বাংলাদেশের গ্রাম এলাকায় ৫৯.৮৪% লোকের এবং শহর এলাকায় ১০.৮১% লোকের কৃষিখামার রয়েছে। মোট দেশজ উৎপাদন তথা জিডিপিতে কৃষিখাতের অবদান ১৯.১% এবং কৃষিখাতের মাধ্যমে ৪৮.১% মানুষের কর্মসংস্থান তৈরি হচ্ছে।</p>
                </div>
                <div class="col-md-3 top-grids">
                    <span class="icon2"></span>
                    <h3>বীজ উন্নয়ন </h3>
                    <p>অধিদপ্তর কার্যালয়. বিএডিসি এর মূল কার্যক্রম হচ্ছে উন্নত মানের বীজ বিক্রয় কৃষক পর্যায়ে বিতরনের সুবিধা পৌছে দেওয়া। জেলার বিভিন্ন উপজেলায় বিএডিসি (বীজ বিপনন), তাদের নিজস্ব কার্যক্রমসহ আর্থ-সামাজিক উন্নয়নে ব্যাপক ভূমিকা পালন করছে। নোয়াখালী জেলার কৃষিতে শতভাগ সাফল্যে বড় অংশীদার হচ্ছে বিএডিসি </p>
                </div>
                <div class="col-md-3 top-grids">
                    <span class="icon3"></span>
                    <h3>শষ্য বীজ গবেষণা</h3>
                    <p>জলবায়ু পরিবর্তন জনিত কারণে সৃষ্ট ঝুঁকি মোকাবেলায় গবেষণা কার্যক্রম গ্রহণ যুক্ত করা হয়েছে। ইনস্টিটিউট উদ্ভাবিত বিভিন্ন ফসলের নতুন জাতের প্রজনন বীজ উৎপাদন ও সরবরাহ নিশ্চিত করা। বৈশ্বিক জলবায়ু পরিবর্তনের সঙ্গে সঙ্গে সামঞ্জস্যপূর্ণ শষ্য উৎপাদন। 'কৃষিতে আইসিটি'র প্রয়োগ করা। ১৯৭৬ সালে আইসিটি'র কোনো ধারণাই ছিল </p>
                </div>
                <div class="col-md-3 top-grids">
                    <span class="icon4"></span>
                    <h3>পাতার উন্নয়ন </h3>
                    <p>পাতা উদ্ভিদের একটি অংশ যার আয়তন স্থির থাকে। পাতার ফলকের আকার সাধারণত চ্যাপ্টা এবং পাতলা হয় যাতে সূর্যের আলো কোষকলা ভেদ করে পাতার যে সমস্ত কোষে ক্লোরোপ্লাস্ট আছে তাদের সবার কাছে পৌঁছতে পারে। এ ছাড়াও পাতায় শ্বসন, বাষ্পমোচন ইত্যাদি শারীরবৃত্তীয় কাজ হয়। পাতা খাদ্য এবং জলের আধার হিসেবেও কাজ করতে পারে।</p>
                </div>

            </div>
        </div>
    </div>

    <!-- Inovation Start -->

    <div class="inovation" style="background: #293352; margin-top: 50px; ">
        <h3>চলতি বর্ষের নতুন উদ্ভাবণ </h3>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="thumbnail">
                        <img src="images/farming/e.jpg" class="img-responsive">
                        <div class="caption">
                            <h3>কৃষি প্রযুক্তিতে পথ প্রদর্শক বাংলাদেশ!</</h3>
                            <h5>রবিবার, অক্টোবর ২০,২০১৬  </h5> কৃষক যে ফসল ফলান, তা যদি তিনি সময়মত বিত্রিক্র করতে না পারেন, তা হলে তাদের বিপুল আর্থিক ক্ষতির মুখোমুখি হতে হয়। বাজারজাত সমস্যার কারণে কোনো এলাকায় বাম্পার ফলনে দাম পড়ে যায় কৃষক যে ফসল ফলান, তা যদি তিনি সময়মত বিত্রিক্র করতে না পারেন, তা হলে তাদের বিপুল আর্থিক ক্ষতির মুখোমুখি হতে হয়।
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="thumbnail">
                        <img src="images/farming/d.jpg" class="img-responsive">
                        <div class="caption">
                            <h3>কুমিল্লার সালামের বানানো নতুন চমক!</h3>
                            <h5>সোমাবার, অক্টোবর ২১, ২০১৬  </h5>কৃষক যে ফসল ফলান, তা যদি তিনি সময়মত বিত্রিক্র করতে না পারেন, তা হলে তাদের বিপুল আর্থিক ক্ষতির মুখোমুখি হতে হয়। বাজারজাত সমস্যার কারণে কোনো এলাকায় বাম্পার ফলনে দাম পড়ে যায় কৃষক যে ফসল ফলান, তা যদি তিনি সময়মত বিত্রিক্র করতে না পারেন, তা হলে তাদের বিপুল আর্থিক ক্ষতির মুখোমুখি হতে হয়।
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="thumbnail">
                        <img src="images/farming/a.jpg" class="img-responsive">
                        <div class="caption">
                            <h3>বরিশালে দেশের সবচেয়ে বড় লাউ ফলন!</h3>
                            <h5>বুধবার, অক্টোবর ২৩,২০১৬  </h5>কৃষক যে ফসল ফলান, তা যদি তিনি সময়মত বিত্রিক্র করতে না পারেন, তা হলে তাদের বিপুল আর্থিক ক্ষতির মুখোমুখি হতে হয়। বাজারজাত সমস্যার কারণে কোনো এলাকায় বাম্পার ফলনে দাম পড়ে যায় কৃষক যে ফসল ফলান, তা যদি তিনি সময়মত বিত্রিক্র করতে না পারেন, তা হলে তাদের বিপুল আর্থিক ক্ষতির মুখোমুখি হতে হয়।
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="thumbnail">
                        <img src="images/farming/b.jpg" class="img-responsive">
                        <div class="caption">
                            <h3>বীজ নিয়ে গবেষণায় উঠে এল নতুন বিস্ময়!</h3>
                            <h5>শনিবার, অক্টোবর ২৬,২০১৬ </h5>কৃষক যে ফসল ফলান, তা যদি তিনি সময়মত বিত্রিক্র করতে না পারেন, তা হলে তাদের বিপুল আর্থিক ক্ষতির মুখোমুখি হতে হয়। বাজারজাত সমস্যার কারণে কোনো এলাকায় বাম্পার ফলনে দাম পড়ে যায় কৃষক যে ফসল ফলান, তা যদি তিনি সময়মত বিত্রিক্র করতে না পারেন, তা হলে তাদের বিপুল আর্থিক ক্ষতির মুখোমুখি হতে হয়।
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="thumbnail">
                        <img src="images/farming/c.jpg" class="img-responsive">
                        <div class="caption">
                            <h3>নতুন চারা রোপন পদ্ধতি  আবিস্কার!</h3>
                            <h5>শনিবার, অক্টোবর ২৬,২০১৬  </h5>কৃকৃষক যে ফসল ফলান, তা যদি তিনি সময়মত বিত্রিক্র করতে না পারেন, তা হলে তাদের বিপুল আর্থিক ক্ষতির মুখোমুখি হতে হয়। বাজারজাত সমস্যার কারণে কোনো এলাকায় বাম্পার ফলনে দাম পড়ে যায় কৃষক যে ফসল ফলান, তা যদি তিনি সময়মত বিত্রিক্র করতে না পারেন, তা হলে তাদের বিপুল আর্থিক ক্ষতির মুখোমুখি হতে হয়।
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="thumbnail">
                        <img src="images/farming/f.jpg" class="img-responsive">
                        <div class="caption">
                            <h3>নতুন চারা রোপন পদ্ধতি  আবিস্কার!</h3>
                            <h5>সোমবার, নভেম্ভর  ২০</h5>কৃকৃষক যে ফসল ফলান, তা যদি তিনি সময়মত বিত্রিক্র করতে না পারেন, তা হলে তাদের বিপুল আর্থিক ক্ষতির মুখোমুখি হতে হয়। বাজারজাত সমস্যার কারণে কোনো এলাকায় বাম্পার ফলনে দাম পড়ে যায় কৃষক যে ফসল ফলান, তা যদি তিনি সময়মত বিত্রিক্র করতে না পারেন, তা হলে তাদের বিপুল আর্থিক ক্ষতির মুখোমুখি হতে হয়।
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Inovation End  -->

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
