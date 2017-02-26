<!DOCTYPE html>
<html>
    <head>
        <title>Web4Dev</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <link href="./css/poverty.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="./css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <script src="./js/poverty.js" async></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="crossorigin="anonymous"></script>
        <link href="css/prism.css" rel="stylesheet" />
    </head>
    <body>
        <div class="sidebar fixed" id="side">
            <div class="sideHeader" style="text-align:center;">
                <div class="sideHeader" style="text-align:center;">
                    <h3 class="white-text">web4Dev</h3>
                </div>
            </div>
            <div class="sideBody">
                <ul class="sideToggle">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li><a class="loader" href="./example.html">Getting Started</a></li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li><a href="#">Other</a></li>
                </ul>
            </div>
        </div>
        <div class="site-content fixed" style="">
            <div class="banner small">
                <div style="position:absolute; background:linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.5),rgba(0,0,0,0)); height:100%; width:100%;"></div>
                <div class="valign content">
                    <div class="container">
                        <h1 class="white-text">Web4Dev CM</h1>
                        <p>Made <span class="secondary">By developers</span> for<span class="secondary"> developers</span></p>
                    </div>
                </div>

                <a class="button floating"><i class="fa fa-download fa-2x" aria-hidden="true"></i></a>
            </div>

            <!--Content goes here-->
            <div class="container" id="replace">
                <a class="button raised">test</a>
                <a class="button raised loader" href="#setup">test load</a>

            </div>
            <!--Content ends here-->

            <footer class="page-footer">
                <div class="container">
                    <div class="row">
                        <div class="col l8 s12">
                            <h5 class="white-text">4Dev</h5>
                            <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        © 2017 Copyright 4Dev All Rights Reserved
                        <a class="grey-text text-lighten-4 right" href="https://www.linkedin.com/in/estebanmagallonperez/">Please Hire Us</a>
                    </div>
                </div>
            </footer>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="crossorigin="anonymous"></script>
    <script src="./js/prism.js"></script>
    <script>
   /*     $(function(){
            $("a[rel='tab']").click(function(e){
                pageurl = $(this).attr('href');
                $.ajax({url:pageurl+'?rel=tab',success: function(data){
                    $('#content').html(data);
                }});
                if(pageurl!=window.location){
                    window.history.pushState({path:pageurl},'',pageurl);
                }
                return false;
            });
        });*/
        window.onload = function() {
            $(".sideToggle").click(function(){
                $(".sidebar").toggleClass("active");
            });
            $("a.loader").click(function(e){
                e.preventDefault();
                pageUrl = $(this).attr('href');
                pageUrl = pageUrl.substring(1);
                console.log(pageUrl);
                $.ajax(
                    {url:'./pages/'+pageUrl+'.html',
                     success:function(data){
                         $("#replace").html(data);
                         Prism.highlightAll();
                     }});

                var url = pageUrl.split('/');
                url = url[url.length -1];
                var compurl = window.location.pathname.split('/');
                compurl = compurl[compurl.length -1];

                if(url!=compurl)
                {
                   // window.history.pushState({path:pageUrl},'',pageUrl);

                }
            });
        };
    </script>
    <script src="./js/loadContent.js" async></script>
</html>
