    <!---------------Футер--------------->
    <footer>
        <div class="footergrid">
            <a href="terms.php" class="footertext">Соглашение</a>
            <div class="mediaLinks">
                <a href="https://www.youtube.com/watch?v=DLzxrzFCyOs"><img src="img/social/VK-Icon-Link.png" alt=""></a>
                <a href="https://www.youtube.com/watch?v=DLzxrzFCyOs"><img src="img/social/Int-Icon-Link.png"
                        alt=""></a>
                <a href="https://www.youtube.com/watch?v=DLzxrzFCyOs"><img src="img/social/Twitter-Icon-Link.png"
                        alt=""></a>
                <a href="https://www.youtube.com/watch?v=DLzxrzFCyOs"><img src="img/social/Telegram-Icon-Link.png"
                        alt=""></a>
            </div>
            <a class="footertext">© anivid.io 2021</a>
        </div>
    </footer>
    <style type="text/css">
        #hellopreloader>p {
            display:none;
        }
        #hellopreloader_preload {
            display: block;
            position: fixed;
            z-index: 99999;
            top: 0;left: 0;
            width: 100%;
            height: 100%;
            min-width: 400px;
            background: #6705e7 url(http://hello-site.ru//main/images/preloads/oval.svg) center center no-repeat;
            background-size:91px;}
    </style>
    <div id="hellopreloader">
        <div id="hellopreloader_preload">
        </div>
    </div>
    <script type="text/javascript">
        var hellopreloader = document.getElementById("hellopreloader_preload");
        function fadeOutnojquery(el){ 
            el.style.opacity = 1;
            var interhellopreloader = setInterval(function() {
                el.style.opacity = el.style.opacity - 0.05;
                if (el.style.opacity <=0.05) {  
                    clearInterval(interhellopreloader);
                    hellopreloader.style.display = "none";
                    }
                },16);
        }
        window.onload = function() {
            setTimeout(function() {
                fadeOutnojquery(hellopreloader);
                    },500);
                };
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="slick/slick.js"></script>
    <script src="https://kit.fontawesome.com/c0b154b39b.js" crossorigin="anonymous"></script>
    <script src="js/slider.js"></script>
    <script src="js/index.js"></script>
    <script src="js/add_to_list.js"></script>
    <script src="js/reg_login.js"></script>
    <script src="js/animelist.js"></script>
    
</body>
</html>