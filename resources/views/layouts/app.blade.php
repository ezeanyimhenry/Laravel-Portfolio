<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="img/fav.html">

    <meta name="author" content="colorlib">

    <meta name="description" content="">

    <meta name="keywords" content="">

    <meta charset="UTF-8">

    <title>Personal</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

    <link rel="stylesheet"
        href="css/A.linearicons.css%2bfont-awesome.min.css%2bbootstrap.css%2bmagnific-popup.css%2cMcc.yJoU4ilZPf.css.pagespeed.cf.YO2lFmrYRe.css" />
    <link rel="stylesheet" href="css/jquery-ui.html">
    <link rel="stylesheet"
        href="css/nice-select.css%2banimate.min.css%2bowl.carousel.css%2bmain.css.pagespeed.cc.aBKHVoSatL.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    <script nonce="a87cafdf-dece-46f6-bf3b-15f9f79df8f2">
        (function(w, d) {
            ! function(a, e, t, r) {
                a.zarazData = a.zarazData || {};
                a.zarazData.executed = [];
                a.zaraz = {
                    deferred: []
                };
                a.zaraz.q = [];
                a.zaraz._f = function(e) {
                    return function() {
                        var t = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({
                            m: e,
                            a: t
                        })
                    }
                };
                for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
                a.zaraz.init = () => {
                    var t = e.getElementsByTagName(r)[0],
                        z = e.createElement(r),
                        n = e.getElementsByTagName("title")[0];
                    n && (a.zarazData.t = e.getElementsByTagName("title")[0].text);
                    a.zarazData.x = Math.random();
                    a.zarazData.w = a.screen.width;
                    a.zarazData.h = a.screen.height;
                    a.zarazData.j = a.innerHeight;
                    a.zarazData.e = a.innerWidth;
                    a.zarazData.l = a.location.href;
                    a.zarazData.r = e.referrer;
                    a.zarazData.k = a.screen.colorDepth;
                    a.zarazData.n = e.characterSet;
                    a.zarazData.o = (new Date).getTimezoneOffset();
                    a.zarazData.q = [];
                    for (; a.zaraz.q.length;) {
                        const e = a.zaraz.q.shift();
                        a.zarazData.q.push(e)
                    }
                    z.defer = !0;
                    for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a.startsWith(
                        "_zaraz_"))).forEach((t => {
                        try {
                            a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
                        } catch {
                            a.zarazData["z_" + t.slice(7)] = e.getItem(t)
                        }
                    }));
                    z.referrerPolicy = "origin";
                    z.src = "https://preview.colorlib.com/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON
                        .stringify(a.zarazData)));
                    t.parentNode.insertBefore(z, t)
                };
                ["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script>
</head>

<body>
    <header id="header">
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="/"><img src="{{ URL('img/xlogo.png.pagespeed.ic.quf3Stafel.png') }}" alt=""
                            title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="about">About</a></li>
                        <li><a href="services">Services</a></li>
                        <li><a href="portfolio">Portfolio</a></li>
                        <li><a href="price">Pricing</a></li>
                        <li class="menu-has-children"><a href="#">Blog</a>
                            <ul>
                                <li><a href="blog-home.html">Blog Home</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-children"><a href="#">Pages</a>
                            <ul>
                                <li><a href="elements.html">Elements</a></li>
                                <li class="menu-has-children"><a href="#">Level 2 </a>
                                    <ul>
                                        <li><a href="#">Item One</a></li>
                                        <li><a href="#">Item Two</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    @yield('section')


    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>About Me</h4>
                        <p>
                            We have tested a number of registry fix and clean utilities and present our top 3 list on
                            our site for your convenience.
                        </p>
                        <p class="footer-text">
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i
                                class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/"
                                target="_blank">Colorlib</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest trends</p>
                        <div class="" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="EMAIL"
                                        placeholder="Enter Email Address" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter Email Address '" required type="email">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <span class="lnr lnr-arrow-right"></span>
                                        </button>
                                    </div>
                                    <div class="info"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                    <div class="single-footer-widget">
                        <h4>Follow Me</h4>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script
        src="js/popper.min.js%2bvendor%2c_bootstrap.min.js%2beasing.min.js%2bhoverIntent.js%2bsuperfish.min.js%2bjquery.ajaxchimp.min.js.pagespeed.jc.zO1jvkjaPC.js">
    </script>
    <script>
        eval(mod_pagespeed_76HaBWfneG);
    </script>
    <script>
        eval(mod_pagespeed_y34BoO09yd);
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script>
        eval(mod_pagespeed_aUIbArmWGz);
    </script>
    <script>
        eval(mod_pagespeed_id2k93m8FB);
    </script>
    <script>
        eval(mod_pagespeed_0ZhDSUWt1O);
    </script>
    <script>
        eval(mod_pagespeed_VO2AJUbdaC);
    </script>
    <script
        src="js/jquery.magnific-popup.min.js%2bjquery.tabs.min.js%2bjquery.nice-select.min.js%2bisotope.pkgd.min.js%2bwaypoints.min.js%2bjquery.counterup.min.js%2bsimple-skillbar.js.pagespeed">
    </script>
    <script>
        eval(mod_pagespeed_G_V_oR6d1Z);
    </script>
    <script>
        eval(mod_pagespeed_ACDyZN06SH);
    </script>
    <script>
        eval(mod_pagespeed_OhK7ZzBB5b);
    </script>
    <script>
        eval(mod_pagespeed_oQyr5S1zBn);
    </script>
    <script>
        eval(mod_pagespeed_uiiZZQTHne);
    </script>
    <script>
        eval(mod_pagespeed_aiEmyBCOu1);
    </script>
    <script>
        eval(mod_pagespeed_rFZQIS36Y4);
    </script>
    <script src="js/owl.carousel.min.js%2bmail-script.js%2bmain.js.pagespeed.jc.1rt2qs3mX8.js"></script>
    <script>
        eval(mod_pagespeed_XycQQQut5T);
    </script>
    <script>
        eval(mod_pagespeed_ftHEPmVJcT);
    </script>
    <script>
        eval(mod_pagespeed_krw7cSU589);
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"72d3db58fe79d7ad","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.6.0","si":100}'
        crossorigin="anonymous"></script>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
