<?php $page = 'proiecte-in-executie' ?>
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
                    <?= t('pie_text_1') ?>
                    <hr />
                    <div>
                        <?php

                        $dir = 'img/niraj/';
                        $files = scandir($dir);
                        foreach ($files as $img) {
                            if ($img != "." && $img != ".." && $img != "t") {
                                echo '<a href="'.$dir.$img.'" class="fancybox th-img" data-fancybox-group="niraj">
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
                    <?= t('pie_text_2') ?>
                    <hr />
                    <div>
                        <?php

                        $dir = 'img/gunoi/';
                        $files = scandir($dir);
                        foreach ($files as $img) {
                            if ($img != "." && $img != ".." && $img != "t") {
                                echo '<a href="'.$dir.$img.'" class="fancybox th-img" data-fancybox-group="gunoi">
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
                    <?= t('pie_text_3') ?>
                    <hr />
                    <div>
                        <?php

                        $dir = 'img/sighisoara/';
                        $files = scandir($dir);
                        foreach ($files as $img) {
                            if ($img != "." && $img != ".." && $img != "t") {
                                echo '<a href="'.$dir.$img.'" class="fancybox th-img" data-fancybox-group="sighisoara">
                                                <img src="'.$dir.'t/th-'.$img.'" alt="" style="width: 200px; height: 150px;" />
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