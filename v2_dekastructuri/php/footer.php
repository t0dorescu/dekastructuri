<footer>
    <div class="container">
        <div class="row">
            <section class="pull-right clearfix">
                <article class="span2 foo-info" style="width: 230px;">
                    <p>    
                        <strong>SC DEKA STRUCTURI SRL</strong><br>
                        CUI 28941568<br>
                        J1/563/2011<br>
                        Jud. Alba, Alba Iulia, str. Henri Coanda nr 1 - spatiu de birouri 2<br>
                        <strong>Tel:</strong> <a href="tel:0374605607">0374 605 607</a>
                    </p>
                </article>
            </section>
            <article class="span3 pull-left">
                <p style="color: #ccc; font-size: 18px; ">
                    <span style="color: #00AEEF; width: inherit">Deka</span>
                    <span style="color: #FFFFFF;">Structuri</span>
                </p>
            </article>
        </div>
    </div>
</footer>
<script src="js/bootstrap.js"></script>
<script>
    $('#search a').hover(function(){
        $(this).stop().animate({'opacity':0.5},350, "easeOutSine");
    }, function(){
        $(this).stop().animate({'opacity':1},350, "easeOutSine");
    })
    $(window).load(function(){
        var curAccord = 0;
        var oldAccord = 0;

        $('._accodList').find('p').slideUp(1);
        $('._accodList').find('._plus').addClass('btnBg1');
        $('._accodList').find('h6').addClass('color1');

        setTimeout(function(){
            $('._accodList > li').eq(0).find('._plus').removeClass('btnBg1');
            $('._accodList > li').eq(0).find('._plus').addClass('btnBg2');
            $('._accodList > li').eq(0).find('p').slideDown();
            $('._accodList > li').eq(0).find('h6').addClass('color2');
        },200)

        $('._accodList').find('._plus, h6').click(
            function(){
                if(curAccord !== $(this).parent().index()){
                    oldAccord = curAccord;
                    curAccord = $(this).parent().index();

                    $('._accodList > li').eq(curAccord).find('._plus').removeClass('btnBg1');
                    $('._accodList > li').eq(curAccord).find('._plus').addClass('btnBg2');
                    $('._accodList > li').eq(curAccord).find('h6').removeClass('color1');
                    $('._accodList > li').eq(curAccord).find('h6').addClass('color2');
                    $('._accodList > li').eq(curAccord).find('p').slideDown();

                    $('._accodList > li').eq(oldAccord).find('._plus').removeClass('btnBg2');
                    $('._accodList > li').eq(oldAccord).find('._plus').addClass('btnBg1');
                    $('._accodList > li').eq(oldAccord).find('h6').removeClass('color2');
                    $('._accodList > li').eq(oldAccord).find('h6').addClass('color1');
                    $('._accodList > li').eq(oldAccord).find('p').slideUp();
                }

            }
        )
    })
</script>
<script>
    $('#search a').hover(function(){
        $(this).stop().animate({opacity:0.5},350, "easeOutSine");
    }, function(){
        $(this).stop().animate({opacity:1},350, "easeOutSine");
    })
</script>
<script>
    if($.browser.msie && $.browser.version == 8){
        $('._accodList li').css({'margin-bottom':'0'});
    }
</script>
</body>
</html>