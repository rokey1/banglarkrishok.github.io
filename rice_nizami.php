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
            <img src="images/paddy/paddy_heding.png" alt="" />
        </div>
    </div>

    <div id="about" class="about">
        <div class="container">
            <h1 style="text-align:center; margin-bottom:50px;color:black;"><u>বিআর২০ (নিজামী)</u></h1>
            <center><img class="about-pic" src="images/paddy/br20.png" alt="" style="text"></center>


            <h3 style="font-weight:bold; margin-bottom:10px; color:green; margin-top: 40px; margin-bottom: 10px">জাত পরিচিতি</h3>
            <p style="letter-spacing:1px;">বিআর২০ বা নিজামী ব্রি উদ্ভাবিত বোনো আউশ ধানের জাত। জাতটি ১৯৮৬ সালে জাতীয় বীজবোর্ডের অনুমোদন লাভ করে। বিআর২০ সরাসরি বপনযোগ্য। বিআর২০ দেশের বৃস্টি বহুল এলাকায় বিশেষ করে বৃহতর চট্টগ্রাম। সিলেট, কুমিল্লা, নোয়াখালি ) ময়মনসিংহ জেলার জন্য উপযোগী। </p>

            <h3 style="font-weight:bold; margin-bottom:10px; color:green; margin-top: 40px; margin-bottom: 10px">জাতের বৈশিষ্ট্যি</h3>
            <p>> গাছের উচ্চতা ১২০ সেস্টিমিটার।
                <br> > চাল মাঝারি মোটা ও স্বচ্ছ।
                <br> > চালে প্রোটিনের পরিমাণ ৮.৫%</p>

            <h3 style="font-weight:bold; margin-bottom:10px; color:green; margin-top: 40px; margin-bottom: 10px">জীবনকাল </h3>
            <p>জাতটির জীবন কাল ১১৫ দিন। </p>

            <h3 style="font-weight:bold; margin-bottom:10px; color:green; margin-top: 40px; margin-bottom: 10px">ফলন</h3>
            <p>উপযুক্ত পরিচর্যা পেলে বিআর২০ হেক্টর প্রতি ৩.৫ টন ফলন দিয়ে থাকে। </p>

            <h3 style="font-weight:bold; margin-bottom:10px; color:green; margin-top: 40px; margin-bottom: 10px">চাষাবাদ পদ্ধতি </h3>
            <p> ১ বীজ বপন: ১০ চৈত্র-১০ বৈশাখ (২৪ মার্চ থেকে ২৩এপ্রিল )। তিন ভাবে বীজ বোনা যায়। ছিটিয়ে, সারি করে এবং ডিবলিং পদ্ধতিতে।
                <br> ২। বপন পদ্ধতি ও বীজের পরিমান:
                <br> • সরাসরি বীজ ছিটিয়ে বপনঃ এ পদ্ধতিতে বীজ লাগেবে ৭০-৮০ কেজি/হেক্টর বা ৯-১০ কেজি বিঘা।
                <br> • সারি করে বপন ঃ সারি থেকে সারি ২৫ সেন্টিমিটার দূরত্বে এবং ৪-৫ সেন্টিমিটার গভীর করে বীজ বন্তে হবে। এ পদ্ধতিতে বীজ লাগেবে ৪৫-৫০ কেজি/হেক্টর বা ৬-৭ কেজি বিঘা।
                <br> • ডিবলিং পদ্ধতিতেঃ ২০ সেন্টি মিটার দূরে দূরে গর্ত করে প্রতি গর্তে ২-৩ টী বীজ দেওয়ার পর গর্তটি </p>

            <h3 style="font-weight:bold; margin-bottom:10px; color:green; margin-top: 40px; margin-bottom: 10px">সম্ভাব্য রোগ</h3>


            <h5 style="font-weight: bold; margin-bottom: 2px; margin-bottom: 10px;"> <b style="color: green;">রোগের নামঃ </b>পাতার লালচে রেখা রোগ (Bacterial Leaf Streak)</h5>


            <h5 style="font-weight: bold; margin-bottom: 2px;margin-bottom: 10px; color: green; ">রোগের লক্ষণ সমূহঃ</h5>
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
                                <td style="text-align: justify">এ রোগ সাধারণত পত্রফলকের মধ্যে সীমাবদ্ধ থাকে। প্রথমে পাতার শিরাসমূহের মধ্যবর্তী স্থানে সরু এবং হালকা দাগ পড়ে। সূর্যের দিকে ধরলে এ দাগের মধ্য দিয়ে আলো প্রবেশ করে এবং পরিস্কার দেখা যায়। আস্তে আস্তে দাগগুলো বড় হয়ে লালচে রং ধারণ করে এবং পাতার পার্শ্ববর্তী বৃহৎ শিরার দিকে ছড়াতে থাকে। আক্রমণ প্রবণ জাতে ধানের পাতা পুরোটাই লালচে রঙের হয়ে মরে যেতে পারে। রোগ বিস্তারের অনুকুল অবস্থায় সারা মাঠ হলদে কমলা রঙের হয়ে যায়। এ ব্যাকটেরিয়া গাছে ক্ষত বা পাতার কোষের স্বাভাবিক ছিদ্র পথে প্রবেশ করে। পাতা পোড়া রোগের চেয়ে বেশি হলদে গুটিকা পাতার উপর সৃষ্টি হয়। বৃষ্টি এবং বাতাস এ রোগ বিস্তারে সাহায্য করে।</td>
                                <td><img src="images/disease/lalse_rog.jpg" alt=""></td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <h5 style="font-weight: bold; margin-bottom: 2px;margin-bottom: 10px; color: green;margin-top: 10px; ">প্রতিরোধ ও চিকিৎসাঃ</h5>
            <p>আক্রান্ত জমি থেকে বীজ সংগ্রহ না করা। এক লিটার পানিতে ৩ গ্রাম ব্যাভিষ্টিন গুলে তাতে বীজ এক রাত রেখে শোধন করা। পোকা দ্বারা পাতায় যেন ক্ষতি হতে না পারে সেজন্য জমিতে পোকা দেখা মাত্র কীটনাশক বা অন্য উপায়ে মেরে ফেলা। নাড়া শুকিয়ে জমিতেই পুড়িয়ে ফেলা। এ রোগ প্রতিরোধশীল জাত যেমন বিআর৩ (বিপ্লব), বিআর৪ (ব্রিশাইল), বিআর৯ (সুফলা), বিআর১০ (প্রগতি), বিআর১৪ (গাজী), বিআর১৬ (শাহীবালাম), বিআর২০ (নিজামী), বিআর২১ (নিয়ামত), বিআর২৪ (রহমত), ব্রিধান২৮, ব্রিধান২৯, ব্রিধান৩০, ব্রিধান৩৭, ব্রিধান৩৮, ব্রিধান৪০, ব্রিধান৪১, ব্রিধান৪২ ইত্যাদি চাষ করা।</p>





        </div>
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
