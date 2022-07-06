<?php $page = 'proiecte-finalizate' ?>
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
                    <div class="clearfix"><hr /></div>
                    <div class="clearfix">&nbsp;</div>
                    <?= t('pf_text_1') ?>
                    <h4 style="text-transform: none; line-height: 19px">
                        <?= t('pf_text_2') ?>
                   </h4>
                   <hr />
                   <h3><?= t('pf_text_3') ?></h3>
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
                   <hr />
                   <h3><?= t('pf_text_6') ?></h3>
                   <br />
                   <div>
                       <?php

                           $dir = 'img/statie_de_suflante/';
                           $files = scandir($dir);
                           foreach ($files as $img) {
                               if ($img != "." && $img != ".." && $img != "t") {
                                   echo '<a href="'.$dir.$img.'" class="fancybox th-img" data-fancybox-group="statie_de_suflante">
                                            <img src="'.$dir.'t/th-'.$img.'" alt="" />
                                         </a>';
                               }
                           }

                       ?>
                   </div>
                   <hr />
                   <h3><?= t('pf_text_7') ?></h3>
                   <br />
                   <div>
                       <?php

                            $dir = 'img/zona_depozitare_namol/';
                            $files = scandir($dir);
                            foreach ($files as $img) {
                               if ($img != "." && $img != ".." && $img != "t") {
                                   echo '<a href="'.$dir.$img.'" class="fancybox th-img" data-fancybox-group="zona_depozitare_namol">
                                            <img src="'.$dir.'t/th-'.$img.'" alt="" />
                                         </a>';
                               }
                            }

                       ?>
                   </div>
                </div>
            </section>
            <section class="span12 ban-box">
                <style>
                    .wow strong,
                    .wow i {
                        text-transform: none;
                        font-size: 26px;
                    }
                </style>
                <div class="row">
                    <div class="clearfix">&nbsp;</div>
                    <div class="clearfix"><hr /></div>
                    <div class="clearfix">&nbsp;</div>
                    <?= t('pf_text_8') ?>
                    <h4 style="text-transform: none; line-height: 19px">
                        <?= t('pf_text_9') ?>
                        <br />
                        <?= t('pf_text_10') ?>
                    </h4>

                    <hr />
                    <div>
                        <?php

                            $dir = 'img/blaj/';
                            $files = scandir($dir);
                            foreach ($files as $img) {
                                if ($img != "." && $img != ".." && $img != "t") {
                                    echo '<a href="'.$dir.$img.'" class="fancybox th-img" data-fancybox-group="blaj">
                                                <img src="'.$dir.'t/th-'.$img.'" alt="" />
                                             </a>';
                                }
                            }

                        ?>
                    </div>
                </div>
            </section>
            <section class="span12 ban-box">
                <div class="row">
                    <div class="clearfix">&nbsp;</div>
                    <div class="clearfix"><hr /></div>
                    <div class="clearfix">&nbsp;</div>
                    <?= t('pf_text_11') ?>
                    <h4 style="text-transform: none; line-height: 19px">
                        <?= t('pf_text_12') ?>
                    </h4>

                    <hr />
                    <div>
                        <?php

                            $dir = 'img/brasov/';
                            $files = scandir($dir);
                            foreach ($files as $img) {
                                if ($img != "." && $img != ".." && $img != "t") {
                                    echo '<a href="'.$dir.$img.'" class="fancybox th-img" data-fancybox-group="brasov">
                                                <img src="'.$dir.'t/th-'.$img.'" alt="" style="width: 200px; height: 150px;" />
                                             </a>';
                                }
                            }

                        ?>
                    </div>
                </div>
            </section>
            <section class="span12 ban-box">
                <div class="row">

                    <div class="clearfix">&nbsp;</div>
                    <div class="clearfix"><hr /></div>
                    <div class="clearfix">&nbsp;</div>
                    <?= t('pf_text_13') ?>
                    <h4 style="text-transform: none; line-height: 19px">
                        <?= t('pf_text_14') ?>
                    </h4>
                    <div>
                        <?php

                            $dir = 'img/sureanu/';
                            $files = scandir($dir);
                            foreach ($files as $img) {
                                if ($img != "." && $img != ".." && $img != "t") {
                                    echo '<a href="'.$dir.$img.'" class="fancybox th-img" data-fancybox-group="sureanu">
                                                            <img src="'.$dir.'t/th-'.$img.'" alt="" style="width: 200px; height: 150px;" />
                                                         </a>';
                                }
                            }

                        ?>
                    </div>
                </div>
            </section>
            <section class="span12 ban-box">
                <div class="row">

                    <div class="clearfix">&nbsp;</div>
                    <div class="clearfix"><hr /></div>
                    <div class="clearfix">&nbsp;</div>
                    <?= t('pf_text_15') ?>
                    <h4 style="text-transform: none; line-height: 19px">

                    </h4>
                    <hr />
                    <h3><?= t('pf_text_16') ?></h3>
                    <br />
                    <div>
                        <?php

                        $dir = 'img/sebesel/bazin_tampon_de_namol/';
                        $files = scandir($dir);
                        foreach ($files as $img) {
                            if ($img != "." && $img != ".." && $img != "t") {
                                echo '<a href="'.$dir.$img.'" class="fancybox th-img" data-fancybox-group="bazin_tampon_de_namol">
                                                            <img src="'.$dir.'t/th-'.$img.'" alt="" style="width: 200px; height: 150px;" />
                                                         </a>';
                            }
                        }

                        ?>
                    </div>
                    <hr />
                    <h3><?= t('pf_text_17') ?></h3>
                    <br />
                    <div>
                        <?php

                        $dir = 'img/sebesel/bazin_tampon_spalare_filtre/';
                        $files = scandir($dir);
                        foreach ($files as $img) {
                            if ($img != "." && $img != ".." && $img != "t") {
                                echo '<a href="'.$dir.$img.'" class="fancybox th-img" data-fancybox-group="bazin_tampon_spalare_filtre">
                                                                <img src="'.$dir.'t/th-'.$img.'" alt="" style="widht: 200px; height: 150px;" />
                                                             </a>';
                            }
                        }

                        ?>
                    </div>
                    <hr />
                    <h3><?= t('pf_text_18') ?></h3>
                    <br />
                    <div>
                        <?php

                        $dir = 'img/sebesel/ingrosator_de_namol/';
                        $files = scandir($dir);
                        foreach ($files as $img) {
                            if ($img != "." && $img != ".." && $img != "t") {
                                echo '<a href="'.$dir.$img.'" class="fancybox th-img" data-fancybox-group="ingrosator_de_namol">
                                                            <img src="'.$dir.'t/th-'.$img.'" alt="" style="widht: 200px; height: 150px;" />
                                                         </a>';
                            }
                        }

                        ?>
                    </div>
                    <hr />
                    <h3><?= t('pf_text_19') ?></h3>
                    <br />
                    <div>
                        <?php

                        $dir = 'img/sebesel/statie_de_deshidratare/';
                        $files = scandir($dir);
                        foreach ($files as $img) {
                            if ($img != "." && $img != ".." && $img != "t") {
                                echo '<a href="'.$dir.$img.'" class="fancybox th-img" data-fancybox-group="statie_de_deshidratare">
                                                            <img src="'.$dir.'t/th-'.$img.'" alt="" style="widht: 200px; height: 150px;" />
                                                         </a>';
                            }
                        }

                        ?>
                    </div>
                </div>
            </section>

            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>
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
