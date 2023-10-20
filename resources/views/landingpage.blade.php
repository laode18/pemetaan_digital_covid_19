<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sistem Pemetaan Digital Covid 19</title>
        <meta name="keywords" content="Website Resmi Penanganan COVID-19 Nasional Indonesia" />
        <meta name="description" content="">
        <meta name="author" content="Website Resmi Penanganan COVID-19">
        <meta name="twitter:card" content="summary_large_image">
        <meta property="og:image" content="https://covid19.go.id/storage/app/media/garuda.webp">
        <meta property="og:site_name" content="covid19.go.id">
        <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('images/logo_pkm.png')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet" async/>
        
        <link rel="stylesheet" href="https://covid19.go.id/combine/9abe29436ad83df505f1559ec421e102-1662796080.css" type="text/css">

        <link rel="stylesheet" href="https://covid19.go.id/combine/6aa5e962cc9c5f8b9e24b12109cceb12-1662796080.css" type="text/css">

        <style>
            .modal-header{
                background: url("https://covid19.go.id/themes/porto/assets/img/notif.png");
            }
        </style>

    </head>
    <body class='font-weight-light' data-target="#header" data-spy="scroll" data-offset="100">

        <div>
                    <style>
        .sticky-header-active header .header-logo img {
            width: 50% !important;
            height: 50% !important;
            padding: 10px 0;
        }

        @media (min-width: 992px) {
            #header .header-nav-main nav>ul>li:not(:first-child) {
                margin-left: 15px;
            }
        }

        .dropbtn {
            padding: 8px 24px 8px 8px;
            margin-left: 16px;
            border-radius: 8px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropbtn:hover, .dropbtn:focus {
            background-color: #191f62;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 10px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown a:hover {background-color: #ddd}

        .show {display:block;}

        .dropdown-menu-arrow {
            top: -20px;
            left: 50%;
            width: 0;
            height: 0;
            position: relative;
        }
        .dropdown-menu-arrow:before {
            content: "";
            position: absolute;
            display: block;
            width: 0;
            height: 0;
            border-width: 4px 5px;
            border-style: solid;
            border-color: transparent;
            z-index: 3;
        }
        .dropdown-menu-arrow:before {
            bottom: -17px;
            right: -8px;
            border-bottom-color: rgb(25 31 98);
            transform: rotate(180deg);
        }
    </style>
    <header id="header" class="header-effect-shrink obn-peta-sebaran"
        data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body border-top-0 appear-animation" data-appear-animation="fadeIn">

            <div class="header-container container" style="padding-top:-10px;">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                           
                                <a href="#" class="logo">
                                  <img src="{{ URL::asset('images/logo_pkm.png'); }}" width="80" height="80" alt="">
                                </a>
                            
                            <div>
                              <!--   <a href="/">
                                  <img class="mr-2" alt="Logo Gugus Tugas Covid-19" style="width: 50px;"
                                      src="https://covid19.go.id/storage/app/media/logo-satgas.png"
                                      srcset='https://covid19.go.id/storage/app/media/logo-satgas.png 2x, https://covid19.go.id/storage/app/media/logo-satgas.png 1x'>
                              </a> -->
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-links order-2 order-lg-1">
                                <div
                                    class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    
                                </div>
                                <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border mr-4">
                                    <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                        <a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i
                                                class="fas fa-search header-nav-top-icon"></i></a>
                                        <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                            <form role="search" action="https://covid19.go.id/hasil-pencarian" method="get">
                                                <div class="simple-search input-group">
                                                    <input class="form-control text-1" id="headerSearch" name="search"
                                                        type="search" value="" placeholder="Search...">
                                                    <span class="input-group-append">
                                                        <button class="btn" type="submit">
                                                            <i class="fa fa-search header-nav-top-icon"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>    
                                </div>
                                <a href="/login" class="btn" style="background-color: green; color: white;"><b>Login</b></a>
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                    data-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>

                                <!-- <div class="dropdown">
                                    <button onclick="showDropdownLang()" class="dropbtn langdropdown"><span class="langdropdown flag-icon flag-icon-id me-1"></span> <span class="dropdown-menu-arrow langdropdown"></span></button>
                                    <div id="langDropdown" class="dropdown-content">
                                        <a class="main-nav__language-switch-link" href="#" data-request="onSwitchLocale" data-request-data="locale: 'id'"><span class="flag-icon flag-icon-id me-1"></span></a>
                                        <a class="main-nav__language-switch-link" href="#" data-request="onSwitchLocale" data-request-data="locale: 'en'"><span class="flag-icon flag-icon-us me-1"></span></a>
                                    </div>
                                </div> -->
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

                <section class="page-header-new">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>
                    Peta Sebaran
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="section section-height-2 bg-color-light position-relative border-0 m-0">
  <div class="container py-2">
        <div class="row text-center align-items-center pb-4 pt-lg-4 mb-3 mb-lg-0 ">
            <div class="col-md-12 col-lg-12 mb-12 mb-lg-0 loading-overlay-showing">
                <div class="loading-overlay background-transparent">
                  <div class="bounce-loader z-index-0">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                  </div>
                </div>
                <iframe id='ifram' class='w-100 d-block' frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>            <footer id="footer" class='m-0'>
    
  
  <div class="footer-copyright">
    <div class="container py-2">
      <div class="row py-4">
        <div class="col text-center">
          <div class="container text-center">
          </div>
          <p class="text-copyright">Sistem Pemetaan Digital Covid 19 - &copy; Copyright 2021. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </div>
</footer>


        </div>

        <link rel="stylesheet" href="https://covid19.go.id/combine/f5073372d33fd91dce07f35ec2fc6356-1662796081.css" type="text/css">

        <link rel="stylesheet" href="https://covid19.go.id/combine/cae97bdbf39dd2deb23b15318a05fb44-1662796081.css" type="text/css">

        <link rel="stylesheet" href="https://covid19.go.id/combine/049d2314c402f4f83976ab5ff5cc549b-1662796080.css" type="text/css">

        <link rel="stylesheet" href="https://covid19.go.id/combine/ddc4b6644e9669b3acce1d157358d5e6-1662796080.css?v=1.01" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:ital,wght@0,100;@0,300;@0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:ital,wght@0,100;@0,300;@0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:ital,wght@0,100;@0,300;@0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" type="text/css">

        <style>
#ifram {       /* iframes are inline by default */
    background: transparent;
    border: none; 
    min-height: 300px;
    transition: opacity .3s;
    opacity: 0;
    height: 0;
}
</style>
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://covid19.go.id/combine/fc060431b0183ca9c15f890b4c4afbcf-1662796081.js"></script>

        <script src="https://covid19.go.id/combine/7940994b79a07710e721831735cf86c8-1662796081.js"></script>

        <script src="https://covid19.go.id/combine/390f9b0a9a15899ce4437db1af759939-1662796081.js"></script>

        <script src="https://covid19.go.id/combine/43ff905a28f022552036c8f0bcf34040-1662796081.js"></script>

        <script src="https://covid19.go.id/combine/f8b038cdf102f538bed312e41de519bb-1662796081.js"></script>

        <script src="https://covid19.go.id/combine/f9ba92f5a8ea4f71b5afa60499d831ff-1662796081.js"></script>
        <script src="https://covid19.go.id/combine/8056dd6cc0cbba1b031796b97bc726b9-1662796080.js"></script>
        <script src="https://covid19.go.id/combine/d0ddbbacc6a97b63a02e879f04a91290-1662796080.js?v=1.07"></script>
        <script>
    var elx = document.createElement('textarea');
    elx.innerHTML = 'https://data.covid19.go.id';
    window.__DATA_DOMAIN__ = elx.value;
    delete elx;

    window.onbeforeunload = function() {
        window.__PARENT_EXITING__ = true;
    };
    window.__MSGLISTENER__ = function(e) {
        console.log('Message received!', e.data, e.origin);
        var elifram = document.getElementById('ifram');
        //var btnreselifram = document.getElementById('btn-reset-elifram');

        if (e.origin ==  window.__DATA_DOMAIN__ && e.data && e.data.state) {
            switch (e.data.state) {
                case 'check':
                    elifram.contentWindow.postMessage('success', window.__DATA_DOMAIN__);
                    break;
                case 'loaded':
                    if (window.__C7TIMER__ !== undefined) {
                        clearTimeout(window.__C7TIMER__);
                        delete window.__C7TIMER__;
                    }
                    //setTimeout(function() {
                        console.log('Reisizing frame to ' + (e.data.height + 20) + 'px...');
                        elifram.parentElement.className = elifram.parentElement.className.replace(/\s*loading-overlay-showing/, ' ');
                        elifram.style.height = (e.data.height + 20) + 'px';
                        elifram.style.opacity = '1';
                        //btnreselifram.style.display = ['/', '/covid', '/covid/'].indexOf(e.data.path) < 0 ? '' : 'none';
                    //}, (e.data.delay && e.data.delay === parseInt(e.data.delay, 10)) ? e.data.delay : 1e3 );
                    break;
                case 'unload':
                    if (window.__PARENT_EXITING__ === undefined) {
                        elifram.style.height = '300px';
                        elifram.style.opacity = '0';
                        elifram.parentElement.className += ' loading-overlay-showing';
                        //btnreselifram.style.display = 'none';
                    }
                    break;
            }
        }
    };
    window.__GETPRECALCHEIGHT__ = function() {
        var cw = $(document.body).outerWidth();
        if (cw >= 1200) return 4599;
        return 6766;
    };
    $(window).on('resize', function(e) {
        //console.log('window resized!', e);
        if (window.__C7TIMER__ !== undefined) {
            clearTimeout(window.__C7TIMER__);
            delete window.__C7TIMER__;
            //console.log('previous window resize handler cancelled.');
        }
        window.__C7TIMER__ = setTimeout(window.__MSGLISTENER__.bind({}, {
            origin: window.__DATA_DOMAIN__,
            data: {
                height: window.__GETPRECALCHEIGHT__(),
                delay: 10,
                state: 'loaded'
            }
        }), e.originalEvent ? 1e3 : 10e3);
    }).trigger('resize');
    window.addEventListener('message', window.__MSGLISTENER__);
    function reset_elifram() {
        $('#ifram').attr('src', window.__DATA_DOMAIN__ + '/public/index.html');
        setTimeout(reset_elifram.bind(), 3 * 3600 * 1000);
    }
    $(function () {
        reset_elifram();
    });
</script>
<script>(function(t,e,s,o){var n,c,l;t.SMCX=t.SMCX||[],e.getElementById(o)||(n=e.getElementsByTagName(s),c=n[n.length-1],l=e.createElement(s),l.type="text/javascript",l.async=!0,l.id=o,l.src="https://widget.surveymonkey.com/collect/website/js/tRaiETqnLgj758hTBazgdxwJiYoUFBK9Ae_2B4KhNg6bLR1V7_2BlX560ZF_2FsMhKQnNP.js",c.parentNode.insertBefore(l,c))})(window,document,"script","smcx-sdk");</script>
        <script>
            function showDropdownLang() {
                document.getElementById("langDropdown").classList.toggle("show");
            }

            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
                if (!event.target.matches('.langdropdown')) {

                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                    }
                }
            }
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160294340-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    
    gtag('config', 'UA-160294340-1');
</script>        <!-- <script> 
 var lennawebchat = document.createElement('script'); lennawebchat.src = "https://covid19.lenna.ai/webchat/lenna-init.js";var app = document.createElement('script');app.src = "https://covid19.lenna.ai/webchat/app.js";document.head.prepend(lennawebchat);document.head.prepend(app);lennawebchat.onload = function () {LennaWebchatInit('lejRej')}; 
</script> -->

<script> 
    var lennawebchat = document.createElement('script'); lennawebchat.src = "https://chat.covid19.go.id/webchat/lenna-init.js";var app = document.createElement('script');app.src = "https://chat.covid19.go.id/webchat/app.js";document.head.prepend(lennawebchat);document.head.prepend(app);lennawebchat.onload = function () {LennaWebchatInit('lejRej')}; 
</script>        <!-- jQuery library -->
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script> -->

<!-- Latest compiled JavaScript -->
 <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
 

 
 
<script>
    function openFloating() {
        if ($(".floating-btn").is(":visible")) {
            $(".floating-btn").slideUp("slow");
        } else {
            $(".floating-btn").slideDown("slow");
        }
    }
</script>
 
 
 
 
 
 
 
<!-- <script type="text/javascript">
         $(document).ready(function () 
        {
            if(window.location.href.match("/") == window.location.href) 
            {
                Swal.fire({
                    showCloseButton: false,
                    showConfirmButton: false,
                    imageUrl: '/storage/app/media/tidakmudik.jpeg',
                    title: 'Mengapa Mudik Dilarang?',
                    text: 'Yuk, tahan dulu mudiknya. Cari tahu informasi #TidakMudik di',
                    footer: '<a href="http://s.id/tidakmudik2021"> <button class="btn btn-primary">Selengkapnya </button></a>'
                    
                    });
}
        });
    </script> -->
    

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<!-- <script type="text/javascript" id="widgetCode" src="//widgefy.io/api/js/widget.js?siteid=1367"></script> -->

<!-- GetButton.io widget -->
<!-- <script type="text/javascript">
    (function () {
        var options = {
            link: "http://covid19.go.id/faskesvaksin", // Link
            call_to_action: "Lokasi Vaksinasi", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script> -->

<!-- /GetButton.io widget -->
<!-- <script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?32467';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"Cek Hoax",
      "borderRadius":"25",
      "marginLeft":"0",
      "marginBottom":"50",
      "marginRight":"50",
      "position":"right"
  },
  "brandSetting":{
      "brandName":"Cek Hoax Di sini",
      "brandSubTitle":"Fakta atau Hoax? Jangan sampai terjebak berita bohong! Cek kebenaran berita viral terbaru disini.",
      "brandImg":"/storage/app/media/logo-satgas.png",
      "welcomeText":"",
      "messageText":"Hoax",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"6285921600500"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script> -->
        <!-- Modal -->
        <div class="modal fade" id="modalNotification" tabindex="-1" role="dialog" aria-labelledby="modalNotificationTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-sm modal-dialog-centered modal-popup-notification" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close-button topright" aria-hidden="true" onclick="closeModalNotification();">&times;</span>
                    </div>
                    <div class="modal-body">
                        <p class="text-subscribe text-center">Lindungi keluarga dan orang di sekitarmu dengan update dari info terpercaya.</p>
                    </div>
                    <div class="modal-footer">
                        <div class='onesignal-customlink-container col-12 justify-content-center d-flex blue-button' style="min-height: 0;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://covid19.go.id/combine/708b7ea94a0eb162e496a955907c4c35-1662796080.js"></script>
<script>
// optional init
  window.onload = function() {
    window.micAccessTool = new MicAccessTool({
      link: 'https://chrome.google.com/webstore/detail/screen-reader/kgejglhpjiefppelpmljglcjbhoiplfn',
      contact: 'mailto:support@covid19.go.id',
      buttonPosition: 'right', // default is 'left'
      forceLang: 'en' // default is 'en' may be 'he-IL', 'ru-RU', or 'fr_FR'
    });
  }
</script>
        <!-- onesignal push notification -->
        <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
        <script>
            var OneSignal = window.OneSignal || [];
            $( document ).ready(function() {
                // $("#modalNotification").modal('toggle');
                
                OneSignal.push(function() {
                    OneSignal.isPushNotificationsEnabled(function(isEnabled) {
                        if (!isEnabled){
                            console.log("Push notifications are not enabled");
                            var timer = parseInt(localStorage['modalNotificationClosed']) || 0;
                            // if timer is tommorow, then show modal
                            console.log(timer);
                            if (timer == null || timer == 0 || timer < (new Date().getTime() / 1000)) {
                                console.log("timer is expired");
                                setTimeout(function() {
                                    $("#modalNotification").modal('toggle');
                                }, 1000);
                            }
                        }else{
                            $(".text-subscribe").hide();
                        }
                    });

                    OneSignal.on('subscriptionChange', function (isSubscribed) {
                        console.log("The user's subscription state is now:", isSubscribed);
                        if(isSubscribed) {
                            localStorage['modalNotificationClosed'] = 0;
                            $("#modalNotification").modal('hide');
                            $(".text-subscribe").hide();
                        }else{
                            $(".text-subscribe").show();
                        }
                    });
                });
            });

            var initConfig = {
                appId: "3bff1f68-d282-4169-83e4-d8d16245bf71",
                safari_web_id: "web.onesignal.auto.6a76584b-4903-4cb9-b550-82d6a06974fc",
                notifyButton: {
                    enable: false,
                },
                promptOptions: {
                    customlink: {
                        enabled: true, /* Required to use the Custom Link */
                        style: "button", /* Has value of 'button' or 'link' */
                        size: "small", /* One of 'small', 'medium', or 'large' */
                        text: {
                            subscribe: "Dapatkan Notifikasi", /* Prompt's text when not subscribed */
                            unsubscribe: "Unsubscribe", /* Prompt's text when subscribed */
                            explanation: "", /* Optional text appearing before the prompt button */
                        },
                        unsubscribeEnabled: true, /* Controls whether the prompt is visible after subscription */
                    },
                }
            };
            OneSignal.push(function () {
                OneSignal.SERVICE_WORKER_PARAM = { scope: "/themes/porto/assets/js/one_signal/" };
                OneSignal.SERVICE_WORKER_PATH = "themes/porto/assets/js/one_signal/OneSignalSDKWorker.js";
                OneSignal.SERVICE_WORKER_UPDATER_PATH = "themes/porto/assets/js/one_signal/OneSignalSDKUpdaterWorker.js";
                OneSignal.init(initConfig);
            });

            function closeModalNotification(){
                var today = +new Date();
                // console.log(today);
                localStorage['modalNotificationClosed'] = today; // only strings
                $("#modalNotification").modal('toggle');
            }
        </script>
    <script>(function(){var js = "window['__CF$cv$params']={r:'74d6924af94ea129',m:'1Jr034uWEN1DQfbCWafxRqeeh0B7Uf6snYk9qWnSypc-1663635073-0-AeBU7xvwzeYCQrqUs4qPvTV7wJR/MgJvKGqe8JArJT4RCUIEAaC8lR9MQ9GLcXA7jti9dvLaJH+93WZ4Y1bTqiloMxPGwEvt6cbWi/QaQXxBq9E/ChF1YtD9udpbca9WJg==',s:[0xa933c68c20,0x50e245edb1],u:'/cdn-cgi/challenge-platform/h/b'};var now=Date.now()/1000,offset=14400,ts=''+(Math.floor(now)-Math.floor(now%offset)),_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/h/b/scripts/alpha/invisible.js?ts='+ts,document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.nonce = '';_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>
</html>