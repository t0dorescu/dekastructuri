<?php $page = 'proiecte' ?>
<?php include 'php/header.php' ?>

<style>
    .th-img img {
        width: 200px;
        height: 150px;
        margin: 5px;
    }
</style>
<div class="container">
    <div class="row">
        
        <section class="span12 ban-box">
            <div class="row">
                <div class="clearfix">&nbsp;</div>
                <hr />
                <div class="clearfix">&nbsp;</div>
                <h3>Denumire Obiectiv:</h3>
                <h4 style="text-transform: none; line-height: 19px">Centrul Pediatric National Maria Beatrice</h4>
                <br />
                <div>
                    <a href="./img/imagini_noi/Centrul Pediatric National Maria Beatrice.jpeg" class="fancybox th-img" data-fancybox-group="centrul_pediatric_maria_beatrice">
                        <img src="./img/imagini_noi/Centrul Pediatric National Maria Beatrice.jpeg" style="width: 350px; height: 200px" alt="" />
                    </a>
                </div>
            </div>
        </section>
        
        <section class="span12 ban-box">
            <div class="row">
                <div class="clearfix">&nbsp;</div>
                <hr />
                <div class="clearfix">&nbsp;</div>
                <h3>Denumire Obiectiv:</h3>
                <h4 style="text-transform: none; line-height: 19px">IBR Invest</h4>
                <br />
                <div>
                    <a href="./img/imagini_noi/IBR Invest 1.jpeg" class="fancybox th-img" data-fancybox-group="ibr_invest">
                        <img src="./img/imagini_noi/IBR Invest 1.jpeg" style="width: 300px; height: 200px" alt="" />
                    </a>
                    <a href="./img/imagini_noi/IBR Invest.jpeg" class="fancybox th-img" data-fancybox-group="ibr_invest">
                        <img src="./img/imagini_noi/IBR Invest.jpeg" style="width: 150px; height: 200px" alt="" />
                    </a>
                </div>
            </div>
        </section>

        <section class="span12 ban-box">
            <div class="row">
                <div class="clearfix">&nbsp;</div>
                <hr />
                <div class="clearfix">&nbsp;</div>
                <h3>Denumire Obiectiv:</h3>
                <h4 style="text-transform: none; line-height: 19px">Hala Drambar - Alba</h4>
                <br />
                <div>
                    <a href="./img/imagini_noi/Hala Drambar - Alba.jpeg" class="fancybox th-img" data-fancybox-group="hala_drambar">
                        <img src="./img/imagini_noi/Hala Drambar - Alba.jpeg" style="width: 300px; height: 200px" alt="" />
                    </a>
                    <a href="./img/imagini_noi/Hala Drambar - Alba 1.jpeg" class="fancybox th-img" data-fancybox-group="hala_drambar">
                        <img src="./img/imagini_noi/Hala Drambar - Alba 1.jpeg" style="width: 300px; height: 200px" alt="" />
                    </a>
                </div>
            </div>
        </section>

        <section class="span12 ban-box">
            <div class="row">
                <div class="clearfix">&nbsp;</div>
                <hr />
                <div class="clearfix">&nbsp;</div>
                <h3>Denumire Obiectiv:</h3>
                <h4 style="text-transform: none; line-height: 19px">Pasaj inferior km 0 + 825 autostrada sibiu - boita</h4>
                <br />
                <div>
                    <a href="./img/imagini_noi/Pasaj inferior km 0 + 825 autostrada sibiu - boita.jpeg" class="fancybox th-img" data-fancybox-group="autostrada_1">
                        <img src="./img/imagini_noi/Pasaj inferior km 0 + 825 autostrada sibiu - boita.jpeg" style="width: 300px; height: 200px" alt="" />
                    </a>
                    <a href="./img/imagini_noi/Pasaj autostrada Sibiu - Boita km  0 + 825.jpeg" class="fancybox th-img" data-fancybox-group="autostrada_1">
                        <img src="./img/imagini_noi/Pasaj autostrada Sibiu - Boita km  0 + 825.jpeg" style="width: 300px; height: 200px" alt="" />
                    </a>
                </div>
            </div>
        </section>

        <section class="span12 ban-box">
            <div class="row">
                <div class="clearfix">&nbsp;</div>
                <hr />
                <div class="clearfix">&nbsp;</div>
                <h3>Denumire Obiectiv:</h3>
                <h4 style="text-transform: none; line-height: 19px">Pod autostrada Sibiu - Boita km 2+110</h4>
                <br />
                <div>
                    <a href="./img/imagini_noi/Pod autostrada Sibiu - Boita km 2+110.jpeg" class="fancybox th-img" data-fancybox-group="autostrada_2">
                        <img src="./img/imagini_noi/Pod autostrada Sibiu - Boita km 2+110.jpeg" style="width: 300px; height: 200px" alt="" />
                    </a>
                    <a href="./img/imagini_noi/Pod autostrada Sibiu - Boita km 2+110 1.jpeg" class="fancybox th-img" data-fancybox-group="autostrada_2">
                        <img src="./img/imagini_noi/Pod autostrada Sibiu - Boita km 2+110 1.jpeg" style="width: 300px; height: 200px" alt="" />
                    </a>
                    <a href="./img/imagini_noi/Pod autostrada Sibiu - Boita km 2+110 2.jpeg" class="fancybox th-img" data-fancybox-group="autostrada_2">
                        <img src="./img/imagini_noi/Pod autostrada Sibiu - Boita km 2+110 2.jpeg" style="width: 150px; height: 200px" alt="" />
                    </a>
                </div>
            </div>
        </section>
        
        <section class="span12 ban-box">
            <div class="row">

                <div class="clearfix">&nbsp;</div>
                <div class="clearfix"><hr /></div>
                <div class="clearfix">&nbsp;</div>
                <?= t('pf_text_1') ?>
                <br />
                <div>
                    <?php

                        $dir = 'img/camera_gratarelor/';
                        $files = scandir($dir);
                        foreach ($files as $img) {
                            if ($img != "." && $img != ".." && $img != "t") {
                                echo '<a href="'.$dir.$img.'" class="fancybox th-img" data-fancybox-group="camera_gratarelor">
                                        <img src="'.$dir.'t/th-'.$img.'" alt="" />
                                        </a>';
                            }
                        }

                    ?>
                </div>
                <hr />
                <h3><?= t('pf_text_4') ?></h3>
                <br />
                <div>
                    <?php

                        $dir = 'img/decantoare_primare/';
                        $files = scandir($dir);
                        foreach ($files as $img) {
                            if ($img != "." && $img != ".." && $img != "t") {
                                echo '<a href="'.$dir.$img.'" class="fancybox th-img" data-fancybox-group="decantoare_primare">
                                        <img src="'.$dir.'t/th-'.$img.'" alt="" />
                                        </a>';
                            }
                        }

                    ?>
                </div>
                <hr />
                <h3><?= t('pf_text_5') ?></h3>
                <br />
                <div>
                    <?php

                        $dir = 'img/sala_masinilor/';
                        $files = scandir($dir);
                        foreach ($files as $img) {
                            if ($img != "." && $img != ".." && $img != "t") {
                                echo '<a href="'.$dir.$img.'" class="fancybox th-img" data-fancybox-group="sala_masinilor">
                                        <img src="'.$dir.'t/th-'.$img.'" alt="" />
                                        </a>';
                            }
                        }

                    ?>
                </div>
            </div>
        </section>

        <div class="clearfix">&nbsp;</div>
        <hr />
        <div class="clearfix">&nbsp;</div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.fancybox').fancybox({
            helpers: {
                overlay: {
                    locked: false
                }
            }
        });
    });
</script>

    
<?php include 'php/footer.php' ?>
