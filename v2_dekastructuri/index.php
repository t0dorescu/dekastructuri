<?php $page = 'index' ?>
<?php include 'php/header.php' ?>

    <section class="gall" style="margin-top: 10px">
        <div class="pattern"></div>
        <div class="container">
            <div class="row">
            <h2 class="hide-mobile" style="margin-bottom: 0;"><?= t('Ultimele proiecte') ?></h2>
                <article class="span12 slider">
                    <div class="camera_wrap">
                        <div data-src="./img/carousel/1.jpg">
                            <div class="camera-caption">
                                <p class="title1">
                                    <img src="img/logo.png" alt="" style="width: auto; height: 150px;" />
                                </p>
                                <p class="title3">
                                    <?= t('index_text_1') ?>
                                </p>
                            </div>
                        </div>
                        <div data-src="./img/carousel/2.jpg">
                            <div class="camera-caption" style="padding-top: 15px;">
                                <?= t('index_text_2') ?>
                                <a href="despre.php" class="btn btn-info margRight"><?= t('Despre') ?></a>
                                <a href="contact.php" class="btn btn-info"><?= t('Contact') ?></a>
                            </div>
                        </div>
                        <div data-src="./img/carousel/3.jpg">
                            <div class="camera-caption">
                                <?= t('index_text_3') ?>
                                <a href="despre.php" class="btn btn-info margRight"><?= t('Despre') ?></a>
                                <a href="contact.php" class="btn btn-info"><?= t('Contact') ?></a>
                            </div>
                        </div>
                        <div data-src="./img/carousel/4.jpg">
                            <div class="camera-caption">
                                <p class="title1">
                                    <img src="img/logo.png" alt="" style="width: auto; height: 150px;" />
                                </p>
                                <p class="title3">
                                    <?= t('index_text_1') ?>
                                </p>
                            </div>
                        </div>
                        <div data-src="./img/carousel/5.jpg">
                            <div class="camera-caption" style="padding-top: 15px;">
                                <?= t('index_text_2') ?>
                                <a href="despre.php" class="btn btn-info margRight"><?= t('Despre') ?></a>
                                <a href="contact.php" class="btn btn-info"><?= t('Contact') ?></a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row" style="margin-top: 75px;">
            <section class="span12 ban-box">
                <div class="row">
                    <article class="span12">
                        
                        <div class="row">
                            <article class="span3">
                                <h2 style="margin-bottom: 0;">Specialisti in executie betoane aparente:</h2>
                            </article>
                            <article class="span3 box-pad1">
                                <div class="thumb-pad1">
                                    <div class="thumbnail">
                                        <figure class="img-polaroid"><img alt="" src="./img/imagini_noi/Pod autostrada Sibiu - Boita km 2+110 1.jpeg"></figure>
                                        <div class="caption">
                                            <h4>Pod autostrada Sibiu</h4>
                                            <p>Boita km 2+110 1</p>
                                            <a href="proiecte.php" class="btn btn-primary"><?= t('vezi mai mult') ?></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="span3 box-pad1">
                                <div class="thumb-pad1">
                                    <div class="thumbnail">
                                        <figure class="img-polaroid"><img alt="" src="./img/imagini_noi/Pasaj autostrada Sibiu - Boita km  0 + 825.jpeg"></figure>
                                        <div class="caption">
                                            <h4>Pasaj autostrada Sibiu</h4>
                                            <p>Boita km  0 + 825</p>
                                            <a href="proiecte.php" class="btn btn-primary"><?= t('vezi mai mult') ?></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="span3 box-pad1">
                                <div class="thumb-pad1">
                                    <div class="thumbnail">
                                        <figure class="img-polaroid"><img alt="" src="./img/imagini_noi/Pasaj inferior km 0 + 825 autostrada sibiu - boita.jpeg"></figure>
                                        <div class="caption">
                                            <h4>Pasaj inferior km 0 + 825</h4>
                                            <p>autostrada sibiu - boita</p>
                                            <a href="proiecte.php" class="btn btn-primary"><?= t('vezi mai mult') ?></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </article>
                </div>
            </section>
            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>
        </div>
    </div>

<?php include 'php/footer.php' ?>