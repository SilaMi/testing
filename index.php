<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>Шевчишина Илона - фотограф</title>
    <link rel="stylesheet" type="text/css" href="/css/reset.css" media="all">
    <link rel="stylesheet" type="text/css" href="/css/styles.css" media="all">
    <script type="text/javascript" src="/js/jquery-1.5.2.min.js"></script>
    
</head>
<body>

<div id="wrap">

    <div id="container">

        <div id="photka">
            <div id="info">
                <ul>
                    <li><img src="/img/email_ico.png" alt="email"/> <a href="mailto:_shevchishina_@mail.ru">_shevchishina_@mail.ru</a></li>
                    <li><img src="/img/phone_ico.png" alt="phone"/> (068)-257-99-98</li>
                    <li><img src="/img/icq_ico.png" alt="icq"/> 460-472-792</li>
                </ul>
                <div class="line"></div>
                <div id="web-links">
                    <span><a href="http://vkonatkte.ru/club14348477"><img src="/img/vk_ico.png" alt="vkonatkte.ru/club14348477"/></a></span>
                    <span><a href="http://napodiume.ru/profile/605680"><img src="/img/napod_ico.png" alt="napodiume.ru/profile/605680"/></a></span>
                    <span><a href="http://www.photosight.ru/users/308588"><img src="/img/photosite_ico2.png" alt="photosight.ru/users/308588"/></a></span>
                    <span><a href="http://photographers.com.ua/profile/ilona_shevchishina"><img src="/img/photogra_ico.png" alt="photographers.com.ua/profile/ilona_shevchishina"/></a></span>
                <p>coming soon... new site :)</p>
                </div>
            </div>
            <img src="/img/photo_8bit.png" alt="фон" width="454" height="225" id="ilona_photo">
            <img src="/img/shevchishina_ilona.png" alt="Шевчишина Илона" width="275" height="46" id="shev_ilona_txt">
            <img src="/img/photographer.png" alt="фотограф" width="80" height="22" id="photo_txt">
        </div>

    </div>

</div>


<script type="text/javascript">


    $(document).ready(function(){
        $('#photka').hover(
            function(){
                $('#shev_ilona_txt').animate({top:-40},'fast','linear',function(){
                    $('#ilona_photo').fadeTo("slow", 0.0, function(){
                        $('#photka').css({'cursor':'default'});
                        $('#info').fadeTo("slow", 1.0);
                    });
                });
                $('#photo_txt').animate({top:240},'fast','linear');
            },
            function(){
                $('#info').stop(true).fadeTo("fast", 0.0, function(){
                    $('#photka').css({'cursor':'pointer'});
                    $('#ilona_photo').fadeTo("slow", 1.0, function(){
                        $('#info').fadeTo("fast", 0.0);
                        $('#shev_ilona_txt').animate({top:88},'fast','linear');
                        $('#photo_txt').animate({top:128},'fast','linear');
                    });



                });

            }
        );
    });
    

</script>

</body>
</html>