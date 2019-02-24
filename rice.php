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
    <link rel='shortcut icon' href='images/favicon.png' type='image/x-icon' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <div class="col-md-6 about-pic">
                <img src="images/paddy/picture_side.jpg" alt="" />

            </div>
            <div class="col-md-6 about-info">
                <h3>বাংলাদেশের প্রেক্ষাপটে ধান</h3>
                <p>ধান (বৈজ্ঞানিক নাম Oryza sativa, Oryza glaberrima ) Graminae/Poaceae গোত্রের দানাশস্যের উদ্ভিদ । ধান উষ্ণ জলবায়ুতে, বিশেষত পূর্ব-এশিয়ায় ব্যাপক চাষ হয়। প্রাচীন চীনা ভাষার Ou-liz শব্দটি আরবিতে Oruz ও গ্রিক ভাষায় Oryza হয়ে শেষে Ritz ও Rice হয়েছে। ধান বা ধান্য শব্দের উৎপত্তি অজ্ঞাত। ধানবীজ বা চাল সুপ্রাচীনকাল থেকে লক্ষ লক্ষ মানুষের প্রধান খাদ্য। চীন ও জাপানের রাজাদের পৃষ্ঠপোষকতায় প্রায় ১০,০০০ বছর আগে ধান চাষ শুরু হয়েছিল বলে জানা যায়। ব্যাপক অভিযোজন ক্ষমতার দরুন ধান উত্তর কোরিয়া থেকে দক্ষিণ অস্ট্রেলিয়া, এমনকি সমুদ্রপৃষ্ঠ থেকে ২,৬০০ মিটার উচ্চতায়ও (জুমলা, নেপাল) জন্মায়। বাংলাদেশে আউশ, আমন এবং বোরো এই তিন মৌসুমে ধান চাষ করা হয়।ধান সাধারণত একবর্ষজীবি উদ্ভিদ, কোন কোন অঞ্চলে বিশেষ করে নাতিশীতোষ্ণ অঞ্চলে ধান দ্বি-বর্ষজীবি উদ্ভিদ হিসেবে চাষ করা হয়। ধানকে ৩০ বছর পর্যন্ত চাষ করা যায়। ধানের বৃদ্ধি ও উৎপাদন অনেকসময় মাটির উর্বরতার উপর নির্ভর করে থাকে।ধান গাছ সাধারণত ১-১.৮ মিটার (৩.৩-৫.৯ ফুট) পর্যন্ত লম্বা হয়ে থাকে। এর পাতা সরু, লম্বা আকৃতির হয়। পাতা ৫০-১০০ সে.মি. (২০-৩৯ ইঞ্চি) পর্যন্ত লম্বা ও ২-২.৫ সে.মি. (০.৭৯-০.৯৮ ইঞ্চি) প্রশস্ত হয়ে থাকে। সাধারণত বায়ুর সাহায্যে এর পরাগায়ন হয়ে থাকে। পুষ্পমঞ্জরীতে ফুলগুলো শাখান্বিত অবস্থায় উপর থেকে নীচ পর্যন্ত সাজানো থাকে। এক একটি পুষ্পমঞ্জরী ৩০-৫০ সেমি (১০-২০ ইঞ্চি) লম্বা হয়ে থাকে। বীজকে খাবার হিসেবে খাওয়া হয়, একে শষ্য বলা হয়। বীজ সাধারণত ৫-১২ মি.মি. লম্বা ও ২-৩ মি.মি. পুরু হয়ে থাকে। [১]যেসব অঞ্চলে বৃষ্টিপাত বেশি কিংবা নিচু জমি, সেসব অঞ্চলে ধান ভালো হয়। পাহাড় কিংবা পাহাড়ের ঢালেও এর চাষ হয়ে থাকে। ধান চাষ অত্যন্ত শ্রমনির্ভর। অনেক শ্রমিক প্রয়োজন হয়, এ কারণে যেসব এলাকায় শ্রমিক খরচ কম সেসকল অঞ্চলে ধান চাষ করা সহজ। এর মাতৃ উদ্ভিদের বাসস্থান এশিয়া এবং আফ্রিকা। ধান চাষ করতে হলে প্রথমে বীজতলা তৈরী করতে হয়, সেখানে বীজ ছিটিয়ে রেখে কয়েকদিন সেচ দিতে হয় তারপর ছোট চারা তৈরী হলে সেগুলোকে তুলে প্রধান জমিতে রোপন করা হয়। তাছাড়া সরাসরি বীজ প্রধান জমিতে ছিটিয়েও চাষ করা হয়। ধান চাষে প্রচুর পানির দরকার হয়। গাছের গোড়ায় অনেকদিন পর্যন্ত পানি জমিয়ে রাখা হয়। সাধারণত নল তৈরী করে, আইল বানিয়ে পানি ধরে রাখা হয়। আগাছা, রোগবালাই ও পোকামাকড় এর কারণে ধানের উৎপাদন কমে যেতে পারে। ধাড়ি ইঁদুর ধানের অন্যতম প্রধান শত্রু। সাধারণত জমিতে পানি আটকে রেখে আগাছাসহ এর উৎপাত কমানো যেতে পারে।ধান থেকে উৎপন্ন দ্রব্যকে চাল বলে। এই চাল থেকে তৈরী হয় ভাত যা বাঙ্গালীর প্রধান খাদ্য।</p>
            </div>
        </div>
    </div>

    <div class="down_about" style="background: #e4e5e6; padding-top: 60px;">
        <div class="container">
            <h2 style="text-align:center; margin-bottom:20px;">বাংলাদেশের ধানের বিভিন্ন জাত সমূহ</h2>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr style='font-size:25px; !important;'>
                            <th>নং</th>
                            <th>ধানের জাত</th>
                            <th>বীজ বপনের সময়</th>
                            <th>ধান পাকাঁর সময়</th>
                            <th>অন্যান্য</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>১</td>
                            <td>বিআর২০ (নিজামী)</td>
                            <td>১০ চৈত্র-১০ বৈশাখ (২৪ মার্চ থেকে ২৩এপ্রিল )</td>
                            <td>২০ আষাড়-২০ শ্রাবণ(৪জুলাই-৪ আগস্ট)</td>
                            <td><a href="rice_nizami.php">বিস্তারিত</a></td>
                        </tr>
                        <td>২</td>
                        <td>বিআর২০ রোপা( রোপা)</td>
                        <td>১০ চৈত্র-১০ বৈশাখ (২৪ মার্চ থেকে ২৩এপ্রিল )</td>
                        <td>২০ আষাড়-২০ শ্রাবণ(৪জুলাই-৪ আগস্ট)</td>
                        <td><a href="">বিস্তারিত</a></td>
                        </tr>

                        <tr>
                            <td>৩</td>
                            <td>বিআর২০ (নিয়ামত)</td>
                            <td>১০ চৈত্র-১০ বৈশাখ (২৪ মার্চ থেকে ২৩এপ্রিল )</td>
                            <td>২০ আষাড়-২০ শ্রাবণ(৪জুলাই-৪ আগস্ট)</td>
                            <td><a href="">বিস্তারিত</a></td>
                        </tr>

                        <tr>
                            <td>৪</td>
                            <td>বিআর২৪(রহমত)</td>
                            <td>১০ চৈত্র-১০ বৈশাখ (২৪ মার্চ থেকে ২৩এপ্রিল )</td>
                            <td>২০ আষাড়-২০ শ্রাবণ(৪জুলাই-৪ আগস্ট) </td>
                            <td><a href="">বিস্তারিত</a></td>
                        </tr>

                        <tr>
                            <td>৫</td>
                            <td>বিআর২৪(মুক্তা)</td>
                            <td>২৫ জ্যৈষ্ঠ -১৫ আষাঢ় (৮জুন থেকে ২৯ জুন )</td>
                            <td>২০ আষাড়-২০ শ্রাবণ(৪জুলাই-৪ আগস্ট)</td>
                            <td><a href="">বিস্তারিত</a></td>
                        </tr>

                        <tr>
                            <td>৬</td>
                            <td>বিআর২৪(প্রগতি)</td>
                            <td>২৫ জ্যৈষ্ঠ -১৫ আষাঢ় (৮জুন থেকে ২৯ জুন )</td>
                            <td>১০-১৫ অগ্রহাইয়ণ(২৫-৩০ নভেম্বর) </td>
                            <td><a href="">বিস্তারিত</a></td>
                        </tr>

                        <tr>
                            <td>৭</td>
                            <td>বিআর৪(ব্রিশাইল)</td>
                            <td>১-৩০আষাঢ়(১৫জুন থেকে ১৪ জুলাই ) </td>
                            <td>১০-১৫ অগ্রহাইয়ণ(২৫-৩০ নভেম্বর) </td>
                            <td><a href="">বিস্তারিত</a></td>
                        </tr>

                        <tr>
                            <td>৮</td>
                            <td>বিআর২৫ (নয়াপাজম)</td>
                            <td>১৫-৩০ আষাঢ় (২৯ জুন থেকে ১৪ জুলাই )</td>
                            <td>১-১৫ অগ্রহাইয়ণ(১৫-৩০ নভেম্বর) </td>
                            <td><a href="">বিস্তারিত</a></td>
                        </tr>

                        <tr>
                            <td>৯</td>
                            <td> বিআর৫(দুলাভোগ) </td>
                            <td>১০-১৫ শ্রাবণ (২৫-৩০ জুলাই )</td>
                            <td>১০-১৫ অগ্রহাইয়ণ(২৫-৩০ নভেম্বর) </td>
                            <td><a href="">বিস্তারিত</a></td>
                        </tr>


                    </tbody>
                </table>
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
