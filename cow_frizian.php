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
            <img src="images/cow/cow_banner.png" alt="" />
        </div>
    </div>

    <div id="about" class="about">
        <div class="container">
            <h1 style="text-align:center; margin-bottom:50px;color:black;"><u>হলিস্টিন-ফ্রিজিয়ান</u></h1>
            <center><img class="about-pic" src="images/cow/frizian%5D.jpg" alt="" style="text"></center>


            <h3 style="font-weight:bold; margin-bottom:10px; color:green; margin-top: 40px; margin-bottom: 10px">উৎপত্তি</h3>
            <p style="letter-spacing:1px;">হল্যান্ডের ফ্রিজিয়ান ফ্রিজিল্যান্ড প্রদেশ। </p>

            <h3 style="font-weight:bold; margin-bottom:10px; color:green; margin-top: 40px; margin-bottom: 10px">সাধারন বৈশিষ্ট</h3>
            <p>দুধাল জাতের মধ্যে হলেষ্টিন ফ্রিজিয়ান এর আকার সর্ব বৃহৎ। গাভীর গড় ওজন ৬৭৫ কেজি এবং ষাঁড়ের ওজন ১০০০ কেজি। শরীরের মধ্য ও পিছন ভাগ ভারী ও ওলান বেশ বড়। পিছনের পা বেশ সোজা। গাভীগুলি বেশ শান্ত কিন্তু ষাঁড়গুলি প্রায় বদ মেজাজী। গায়ের রং কালো-সাদায় চিত্রা এবং যে কোন প্রকারের প্রাধান্য থাকতে পারে। জন্মের সময় বাচ্চার গড় ওজন ৪৫ কেজি। হলেস্টিন ফ্রিজিয়নের বয়োপ্রাপ্তি দেরীতে ঘটে।</p>

            <h3 style="font-weight:bold; margin-bottom:10px; color:green; margin-top: 40px; margin-bottom: 10px">উপকারিতা</h3>
            <p>বাৎসরিক দুগ্ধ উৎপাদন ক্ষমতা ৪৫০০-৯০০০ কেজি। চর্বির পরিমান শতকরা ৩.৫ ভাগ। দূগ্ধবতী গাভীর মধ্যে সর্বাপেক্ষা বেশী ও মাংশ উৎপাদনকারী জাত। </p>

            <h3 style="font-weight:bold; margin-bottom:10px; color:green; margin-top: 40px; margin-bottom: 10px">খাবার</h3>
            <p>ইউরিয়া-মোলাসেস খড়: পরিমাণমতো ইউরিয়া সার, চিটাগুড়, খড় ও পানি মিশিয়ে তৈরী হয়। দানাদার খাদ্য: গম, চালের খুদ, ভুষি ইত্যাদি দানা জাতীয় খাদ্য। কাঁচা ঘাস: কাঁচা ঘাস ছাড়াও শাক-পাতা জাতীয় খাবারও এর মধ্যে পড়বে। ওজন অনুযায়ী গরুর দৈনিক খাদ্যতালিকা
                <br>
                <br>


                <div class="container">
                    <div class="table-responsive" style="padding-bottom: 0px !important;">
                        <table class="table table-bordered" style="background: #e4e5e6; text-align: center;  ">
                            <thead>
                                <tr style='font-size:20px; !important;'>
                                    <th>গরুর ওজন (কেজি)</th>
                                    <th>ইউরিয়া-মোলাসেস খড় (কেজি)</th>
                                    <th>দানাদার খাদ্য(কেজি)</th>
                                    <th>কাঁচা ঘাস </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> ৫০</td>
                                    <td> ০.৫ </td>
                                    <td> ১.২৫</td>
                                    <td> ২ </td>
                                </tr>
                                <tr>
                                    <td>৭৫</td>
                                    <td>১ </td>
                                    <td> ২ </td>
                                    <td>৩</td>

                                </tr>

                                <tr>
                                    <td>১০০</td>
                                    <td>১.৫ </td>
                                    <td> ৩</td>
                                    <td>৪</td>

                                </tr>

                                <tr>
                                    <td>১৫০</td>
                                    <td>২</td>
                                    <td>৩.৫</td>
                                    <td>৫ </td>

                                </tr>



                                <tr>
                                    <td>২০০</td>
                                    <td>৩ </td>
                                    <td> ৪ </td>
                                    <td>৬ </td>

                                </tr>

                                <tr>
                                    <td>২৫০</td>
                                    <td>৩.৫ </td>
                                    <td> ৪.৫ </td>
                                    <td>৭ </td>

                                </tr>






                            </tbody>
                        </table>
                    </div>
                </div>


                <br>
                <br>
                <h5 style="color: green; font-size: 20px;  margin-bottom: 5px; ">খাবার তৈরীর পদ্ধত: </h5>

                <h5 style="font-weight: bold; margin-bottom: 2px; ">ইউরিয়া-মোলাসেস খড়:</h5> এই খাবারে ইউরিয়ার পরিমাণ ঠিক রাখা অত্যন্ত জরুরী। পরিমাণের চেয়ে বেশী ইউরিয়া খাওয়ালে গরুর শরীরে বিষক্রিয়া ঘটতে পারে। ইউরিয়া-মোলাসেস খড় কীভাবে বানাবেন: এই খাবারটি বানানোর দু’টি পদ্ধতি এখানে আলোচনা করা হলো। প্রথম পদ্ধতিতে ইউরিয়া-মোলাসেস খড় বানিয়ে ৭ দিন পরে গরুকে খাওয়ানো হয়। দ্বিতীয় পদ্ধতিতে ইউরিয়া-মোলাসেস খড় বানিয়ে সঙ্গে সঙ্গেই গরুকে খাওয়ানো যায়।
                <br>
                <br>
                <h5 style="font-weight: bold; margin-bottom: 2px; ">প্রথম পদ্ধত:</h5> ৭ দিন পরে খাওয়ানোর উপযোগী): প্রথমে ডালির নীচে একটি বড় পলিথিন বিছিয়ে নিতে হবে। ১০ কেজি শুকনা খড় পলিথিনের ওপর বিছাতে হবে। এরপর ১০ লিটার পানিতে ৪০০ গ্রাম ইউরিয়া ভালভাবে মিশিয়ে খড়ের ওপর ছিটাতে হবে। পানি ছিটানো শেষে পা দিয়ে ভালভাবে খড়গুলো মাড়িয়ে নিতে হবে যাতে করে পানি খুব ভালভাবে খড়ের মধ্যে ঢুকে যায়। তারপর পলিথিনের প্রান্ত এমনভাবে গুটিয়ে খড়গুলোকে বাঁধতে হবে যাতে করে ভেতরে বাতাস না থাকে। বায়ুশূন্য অবস্থায় এভাবে ৭ দিন রাখার পর এই খড় গরুকে খাওয়াতে হবে।
                <br>
                <br> এই পদ্ধতিতে প্রতি ১০০ কেজি খড়ের সঙ্গে পানি, চিটাগুড় ও ইউরিয়া যেভাবে মেশাবেন:
                <div class="container">
                    <div class="table-responsive" style="padding-bottom: 0px !important;">
                        <table class="table table-bordered" style="background: #e4e5e6; text-align: center;  ">
                            <thead>
                                <tr style='font-size:20px; !important;'>
                                    <th>খড় (কেজিপ্রতি)</th>
                                    <th> পানি (লিটারপ্রতি)</th>
                                    <th>চিটাগুড় (কেজিপ্রতি)</th>
                                    <th>ইউরিয়া (কেজিপ্রতি) </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> ১০০</td>
                                    <td> ৫০-৭০ </td>
                                    <td> ২০-২৪</td>
                                    <td> 2 </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>


                <br>
                <br>
                <h5 style="font-weight: bold; margin-bottom: 2px; ">দ্বিতীয় পদ্ধতি (সঙ্গে সঙ্গে খাওয়ানোর উপযোগী):</h5> এক্ষেত্রে প্রতি ১৫ দিনে ইউরিয়ার পরিমাণ কিছু কিছু করে বাড়ানো হয় তবে বাকি উপকরণের পরিমাণ একই থাকে। গরুকে প্রথম ১৫ দিন ৫ গ্রাম (বা ১ চা চামচ) ইউরিয়া ২০০ মিলি চিটাগুড় ও দেড় থেকে দুই লিটার পানির সঙ্গে মিশিয়ে টুকরা করা খড় দিয়ে খাওয়ানো যায়। এর পরের ১৫ দিন ইউরিয়ার পরিমাণ ৫ গ্রাম বাড়িয়ে মোট ১০ গ্রাম (বা ২ চা চামচ) একই পরিমাণ চিটাগুড় ও পানির সঙ্গে মিশিয়ে কাটা ঘাস বা খড় দিয়ে খাওয়াতে হবে। পরবর্তী ১৫ দিন একইভাবে ৫ গ্রাম ইউরিয়া অর্থাৎ ১৫ গ্রাম করে একই নিয়মে খাওয়াতে হবে। শেষ ১৫ দিন ২০ গ্রাম ইউরিয়া একই নিয়মে খাওয়াতে হবে। মনে রাখতে হবে এই পদ্ধতিতে কোনোভাবেই ২০ গ্রামের বেশী খাওয়ানো চলবে না।
                <br>
                <br>


                <h5 style="font-weight: bold; margin-bottom: 2px; ">দানাদার খাদ্য:</h5> চাল, গম, ভুষি ইত্যাদি দানা জাতীয় খাবারকে দানাদার খাদ্য বলে। বিভিন্নদানাদার খাবার মিশিয়ে মোটাতাজাকরণের গরুর জন্য আদর্শ খাদ্যটি তৈরী হয়। নীচের তালিকায় দানাদার খাবারের পাঁচ ধরনের মিশ্রণ উল্ল্লেখ করা হলো। এটি সাধারণ স্বাস্থ্যের অধিকারী দুই দাঁতের গরুর যা দৈনিক খাওয়াতে হবে।
                <br>
                <br> খাবার বিভিন্ন নমুনায় খাবার মেশানোর পরিমাণ (গ্রাম)
                <div class="container">
                    <div class="table-responsive" style="padding-bottom: 0px !important;">
                        <table class="table table-bordered" style="background: #e4e5e6; text-align: center;  ">
                            <thead>
                                <tr style='font-size:20px; !important;'>
                                    <th>নাম</th>
                                    <th>নমুনা-০১</th>
                                    <th>নমুনা-০২</th>
                                    <th>নমুনা-০৩</th>
                                    <th>নমুনা-০৪</th>
                                    <th>নমুনা-০৫</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> গমের ভূষি</td>
                                    <td> ৫৬০</td>
                                    <td> ২৫০</td>
                                    <td> ২৫০ </td>
                                    <td> ২৫০ </td>
                                    <td> ৪৮০</td>
                                </tr>
                                <tr>
                                    <td>চালের গুঁড়া</td>
                                    <td> ৩০০</td>
                                    <td> ৩০০</td>
                                    <td> ২৪০</td>
                                    <td>১৫০</td>

                                </tr>

                                <tr>
                                    <td> খেসারী ভুষি</td>
                                    <td>২০০</td>
                                    <td> ১০০</td>
                                    <td> ১০০</td>
                                    <td>৫০</td>

                                </tr>

                                <tr>
                                    <td>চালের খুদ</td>
                                    <td>১০০</td>
                                    <td>১০০</td>
                                    <td>১০০</td>
                                    <td>১০০</td>
                                    <td>১০০</td>



                                </tr>



                                <tr>
                                    <td>গম ভাঙা</td>
                                    <td>১৫০</td>
                                    <td>১৫০</td>
                                    <td>১৫০</td>
                                    <td>১০০ </td>
                                    <td>১০০ </td>


                                </tr>

                                <tr>
                                    <td> তিলের খৈল</td>
                                    <td>১৫০ </td>
                                    <td>১৫০ </td>
                                    <td>১৫০ </td>
                                    <td> ৩৫০ </td>
                                    <td> ৩৫০ </td>


                                </tr>
                                <tr>
                                    <td> নারকেলের খৈল</td>
                                    <td>২০০ </td>
                                    <td>২০০ </td>
                                    <td>২০০ </td>
                                    <td>২০০ </td>
                                    <td>২০০ </td>



                                </tr>
                                <tr>
                                    <td> তিলের খৈল</td>
                                    <td>১৫০ </td>
                                    <td>১৫০ </td>
                                    <td>১৫০ </td>
                                    <td> ৩৫০ </td>
                                    <td> ৩৫০ </td>


                                </tr>
                                <tr>
                                    <td> সরিষার খৈল</td>
                                    <td>১৩৫ </td>
                                    <td>১৩৫ </td>
                                    <td>১৩৫ </td>
                                    <td>১৩৫ </td>
                                    <td>১৩৫ </td>



                                </tr>
                                <tr>
                                    <td> শুঁটকি মাছ গুঁড়া</td>
                                    <td>৭৫</td>
                                    <td> ৫০ </td>
                                    <td> ৫০ </td>
                                    <td> ৫০ </td>
                                    <td> ৫০ </td>



                                </tr>
                                <tr>
                                    <td> ঝিনুক গুঁড়া </td>
                                    <td>৫ </td>
                                    <td>৫ </td>
                                    <td>৫ </td>
                                    <td>৫ </td>
                                    <td>৫ </td>

                                </tr>
                                <tr>
                                    <td> ভিটামিন ও খনিজ </td>
                                    <td>১ </td>
                                    <td>১ </td>
                                    <td>১ </td>
                                    <td>১ </td>
                                    <td>১ </td>


                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <br>
                <br> ১২০-১৫০ কেজি ওজনের বাছুরের দৈনিক খাদ্যতালিকা: এই ওজনের দুই দাঁতের বাছুরের জন্য নীচের খাদ্যতালিকাটি আদর্শ। খড় ৩ কেজি ঘাস ৪ কেজি গমের ভূষি/চালের কুড়া ০.২৫ কেজি তিলের খৈল ০.২৫ কেজি ইউরিয়া ৩০ গ্রাম লালী গুড় ৩০০ গ্রাম লবণ ৩০ গ্রাম হাড়ের গুঁড়া ৩০ গ্রাম
                <br>
                <br> চার দাঁতের দুর্বল গরুর জন্য দানাদার খাদ্য: মোটাতাজাকরণের জন্য দুই দাঁতের বেশী দাঁতওয়ালা গরু যদিও না কেনাই ভাল তবে কেউ যদি এ ধরনের গরু মোটাতাজা করতে চান তবে তিনি নীচের দানাদার দৈনিক খাদ্যতালিকাটি অনুসরণ করতে পারেন। খড় ২.৫ কেজি ঘাস ৫.০ কেজি গম বা চালের ভুষি ০.৫ কেজি তিলের খৈল ০.৫ কেজি ইউরিয়া ৮০ গ্রাম লালী গুড় ৪০০ গ্রাম লবণ ৩৫ গ্রাম হাড়ের গুঁড়া ৩৫ গ্রাম
                <br>
                <br> দুর্বল ও হালকা এঁড়ে বাছুরের খাদ্য: দুই দাঁত হওয়ার বয়স হয়নি এ ধরনের বাছুর মোটাতাজাকরণের জন্য নেওয়া উচিত না। সর্ব্বোচ্চ এক বছর বয়স এবং ওজন ৮০ কেজির মধ্যে হলে মোটাতাজাকরণের পক্ষে সেই বাছুরগুলো দুর্বল ও হালকা বলে ধরা হয়। </p>

            <h3 style="font-weight:bold; margin-bottom:10px; color:green; margin-top: 40px; margin-bottom: 10px">সম্ভাব্য রোগ</h3>
            <h5 style="font-weight: bold; margin-bottom: 2px; margin-bottom: 10px;"> <b style="color: green;">রোগের নামঃ </b>দুধ জ্বর বা মিল্ক ফিভার</h5>

            <h5 style="font-weight: bold; margin-bottom: 2px;margin-bottom: 10px; "> <b style="color: green;">রোগের মূলত কারনঃ</b> দুধ দহনের সময় অতিরিক্ত মাত্রায় ক্যালসিয়াম বের হয়ে যাওয়ার ফলে এ রোগ হয়। গাভীর দুধে ক্যালসিয়াম ও ফসফরাসের সামঞ্জস্য না হলে।</h5>
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
                                <td style="text-align: justify"> ১। বাচ্চা প্রসব করার ৪৮ ঘণ্টার মধ্য বুকের উপর শুয়ে পড়ে এবং মাথা এক দিক কাত করে থাকে।
                                    <br> ২। দুর্বলতা এবং সচেতনতা কমে যায়।
                                    <br>৩। চোখের মণি বড় হয়ে যায়।
                                    <br>৪। তাপমাত্রা কমে যায়।(৯৫-৯৬ ডিগ্রি ফাঃ)
                                    <br>৫। রুমেনের নড়াচড়া কমে যায়।
                                    <br>৬। রক্তে ক্যালসিয়ামের মাত্রা কমে যায়।
                                    <br> ৭। চিকিৎসা না করলে গাভী মারা যায়।
                                    <br>৮। হাড় থেকে ক্যালসিয়াম সচল করার ক্ষমতা কমে যায়।</td>
                                <td><img src="images/disease/milk%20fiver.jpg" alt=""></td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>



            <h5 style="font-weight: bold; margin-bottom: 2px;margin-bottom: 10px; color: green;margin-top: 10px; ">প্রতিরোধ ও চিকিৎসাঃ</h5> *খাবারের সাথে ক্যালসিয়াম মিশিয়ে দিতে হবে।
            <br> *বাচ্চা প্রসবের ১-২ মাস পূর্ব থেকে ডি, সি, পি, খাওয়াতে হবে।



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
