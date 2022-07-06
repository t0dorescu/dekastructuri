<?php $page = 'despre' ?>
<?php include 'php/header.php' ?>

<style>
    h1 {
        font-size: 34px;
        margin-top: 40px;
    }
    h3 {
        margin: 30px 0;
        font-size: 18px;
    }
    p {
        font-size: 16px;
        margin: 15px 0;
    }
    ul li {n
        font-size: 16px;
    }
</style>

    <div class="container">
        <div class="row">
            <section class="span12">a
                <div class="row">
                    <h1><?= t('Despre') ?></h1>
                    <p><?= t('despre_text_1') ?></p>
                    <p><?= t('despre_text_2') ?></p>
                    <p><?= t('despre_text_3') ?></p>
                    <h3><?= t('Activitate') ?>:</h3>
                    <table>
                        <tr>
                            <td valign="top" style="padding-right: 30px"><strong>2011</strong></td>
                            <td>
                                <?= t('despre_text_4') ?>
                                <br />
                            </td>
                        </tr>
                        <tr>
                            <td valign="top"><strong>2012</strong></td>
                            <td>
                                <?= t('despre_text_5') ?>
                                <br />
                            </td>
                        </tr>
                        <tr>
                            <td valign="top"><strong>2013</strong></td>
                            <td>
                                <?= t('despre_text_6') ?>
                                <br />
                            </td>
                        </tr>
                        <tr>
                            <td valign="top"><strong>2014</strong></td>
                            <td>
                                <?= t('despre_text_7') ?>
                                <br />
                            </td>
                        </tr>
                        <tr>
                            <td valign="top"><strong>2015</strong></td>
                            <td>
                                <?= t('despre_text_8') ?>
                                <br />
                            </td>
                        </tr>
                        <tr>
                            <td valign="top"><strong>2016</strong></td>
                            <td>
                                <?= t('despre_text_9') ?>
                                <br />
                            </td>
                        </tr>
                    </table>

                    <h3><?= t('Echipa') ?>:</h3>
                    <p>
                       <span style="color: #0077b3; font-weight: bold">Ing. Galambfalvi Karoly</span> <br />
                       <?= t('despre_text_10') ?>
                    </p>
                    <p>
                        <span style="color: #2d6987; font-weight: bold">Ing. Butas Daniel</span><br />
                        <?= t('despre_text_11') ?>
                    </p>
                    <p>
                        <span style="color: #2d6987; font-weight: bold">Ing. Piclisan Tudor</span><br />
                        <?= t('despre_text_12') ?>
                        <br />
                    <br />
                    <br />
                </div>
            </section>
        </div>
    </div>



<?php include 'php/footer.php' ?>