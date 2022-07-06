<?php $page = 'index' ?>
<?php include 'php/header.php' ?>

    <section class="gall" style="margin-top: 10px">
        <div class="pattern"></div>
        <div class="container">
            <div class="row">
                <article class="span12 slider">
                    <div class="camera_wrap">
                        <div data-src="img/picture1.jpg">
                            <div class="camera-caption">
                                <p class="title1">
                                    <img src="img/logo.png" alt="" style="width: auto; height: 200px;" />
                                </p>
                                <p class="title3">
                                    <?= t('index_text_1') ?>
                                </p>
                            </div>
                        </div>
                        <div data-src="img/picture2.jpg">
                            <div class="camera-caption">
                                <?= t('index_text_2') ?>
                                <a href="despre.php" class="btn btn-info margRight"><?= t('Despre') ?></a>
                                <a href="contact.php" class="btn btn-info"><?= t('Contact') ?></a>
                            </div>
                        </div>
                        <div data-src="img/picture3.jpg">
                            <div class="camera-caption">
                                <?= t('index_text_3') ?>
                                <a href="despre.php" class="btn btn-info margRight"><?= t('Despre') ?></a>
                                <a href="contact.php" class="btn btn-info"><?= t('Contact') ?></a>
                           </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!--content-->
    <div class="container">
        <div class="row">
            <section class="span12 ban-box">
                <div class="row">
                    <article class="span12">
                        <h2><?= t('Ultimele proiecte') ?></h2>
                        <div class="row">
                            <article class="span3">
                                <h2><?= t('index_text_4') ?></h2>
                                <h3><?= t('index_text_5') ?></h3>
                                <p class="margBot font3"><?= t('index_text_6') ?></p>
                                <a href="proiecte-finalizate.php" class="btn btn2 btn-info "><?= t('Vizualizare') ?></a>
                            </article>
                            <article class="span3 box-pad1">
                                <div class="thumb-pad1">
                                    <div class="thumbnail">
                                        <figure class="img-polaroid"><img alt="" src="img/camera_gratarelor/03.JPG"></figure>
                                        <div class="caption">
                                            <?= t('index_text_7') ?>
                                            <a href="proiecte-finalizate.php" class="btn btn-primary"><?= t('vezi mai mult') ?></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="span3 box-pad1">
                                <div class="thumb-pad1">
                                    <div class="thumbnail">
                                        <figure class="img-polaroid"><img alt="" src="img/decantoare_primare/03.JPG"></figure>
                                        <div class="caption">
                                            <?= t('index_text_8') ?>
                                            <a href="proiecte-finalizate.php" class="btn btn-primary"><?= t('vezi mai mult') ?></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="span3 box-pad1">
                                <div class="thumb-pad1">
                                    <div class="thumbnail">
                                        <figure class="img-polaroid"><img alt="" src="img/sala_masinilor/03.JPG"></figure>
                                        <div class="caption">
                                            <?= t('index_text_9') ?>
                                            <a href="proiecte-finalizate.php" class="btn btn-primary"><?= t('vezi mai mult') ?></a>
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